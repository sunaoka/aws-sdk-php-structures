<?php

namespace Sunaoka\Aws\Structures\Ssm\GetServiceSetting;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SettingId
 */
class GetServiceSettingRequest extends Request
{
    /**
     * @param array{SettingId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
