<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\RegisterAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\TimestreamResources $timestreamResources
 * @property Shapes\IamResources $iamResources
 */
class RegisterAccountRequest extends Request
{
    /**
     * @param array{
     *     timestreamResources?: Shapes\TimestreamResources,
     *     iamResources?: Shapes\IamResources
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
