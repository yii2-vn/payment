<?php
/**
 * @link https://github.com/yii2-vn/payment
 * @copyright Copyright (c) 2017 Yii2VN
 * @license [New BSD License](http://www.opensource.org/licenses/bsd-license.php)
 */

namespace yii2vn\payment\baokim;

use yii2vn\payment\RequestInstance as BaseRequestInstance;

/**
 * Class BaoKimCheckoutInstance
 *
 * @author Vuong Minh <vuongxuongminh@gmail.com>
 * @since 1.0
 */
class CheckoutRequestInstance extends BaseRequestInstance
{

    public function rules()
    {
        return [

        ];
    }

    public function getScenario()
    {
        return $this->method;
    }

}