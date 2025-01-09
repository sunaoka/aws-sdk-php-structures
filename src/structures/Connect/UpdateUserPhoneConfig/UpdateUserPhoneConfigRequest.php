<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateUserPhoneConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\UserPhoneConfig $PhoneConfig
 * @property string $UserId
 * @property string $InstanceId
 */
class UpdateUserPhoneConfigRequest extends Request
{
    /**
     * @param array{
     *     PhoneConfig: Shapes\UserPhoneConfig,
     *     UserId: string,
     *     InstanceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
