<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\RegisterAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\TimestreamResources|null $timestreamResources
 * @property Shapes\IamResources|null $iamResources
 */
class RegisterAccountRequest extends Request
{
    /**
     * @param array{
     *     timestreamResources?: Shapes\TimestreamResources|null,
     *     iamResources?: Shapes\IamResources|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
