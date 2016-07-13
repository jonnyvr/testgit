<?php
namespace form_sys;

/**
 * 
 * 此类对ServerDataOp进行wrap包装， 主要是加入了DescAndTips
 * @author jonny
 *
 */
class DataToClient
{
    /**
     * @param array $tmp_searchby  根据搜索条件数组进行查询
     * @param array $tmp_orderby  根据排序条件数组进行查询
     * @param int $tmp_page 得到第几页数据
     * @return json或其他数据格式     * 
     * @example 
     * {
            searchby://组合查询或单个查询
            [
              {
        
              }
            ],
            orderby: //按某某字段排序，此字段可有可无，默认无,需要此字段的原因是因为前端数据列表可能需要显示“按XX排序”
            [
              xxxx,
              xxxx
            ]，
            page://当前页码及所有页码
            {
              s_cur,
              s_total_count
            },
            datas: //所有数据
            {
              data_header: //所有表单数据的字段说明，长度必须等于data_list的长度
              [
                {
                  header_desc:xxxx, //说明文字
                  order_support:1  //是否支持排序
                },
                {
        
                }
              ]，
              data_list: //所有数据类别
              [
                { //每个数据单元
                  s_innerid:xxx,
                  s_data_field:xxx,
                  s_data_value:xxx
                },
                {
        
                }
              ]
            }
        }
     */
    public function query_data_list($tmp_searchby, $tmp_orderby, $tmp_page) {
        
    }
    
    
    /**
     * 
     * @example {
                    tips:// 提示文字列表，前端模板中按顺序显示
                    [
                      "xxxxxxxxxxxx",
                      "xxxxxxxxxxxx"
                    ],
                    datas:
                    [
                      {
                        s_filed_name:xxx, //增操作时此字段为空
                        s_filed_desc:xxx, //表单字段说明， 比如“用户名”
                        s_filed_value:xxx, //增加操作是此字段为空
                        s_filed_check_type:xxx, //字段提交时是否检测 通过JS检测？
                        s_filed_check_ok_tips:xxx, //字段检测如果符合要求的提示 通过JS检测？  
                        s_filed_check_fail_tips:xxx, //字段检测如果不符合要求的提示 通过JS检测？
                      },
                      {
                
                      }
                    ]
                  }
     */
    public function query_edit_data($tmp_data){
        
    }
    
    public function del_data($tmp_data) {
        
    }
    
    public function add_data($tmp_data) {
        
    }
}

