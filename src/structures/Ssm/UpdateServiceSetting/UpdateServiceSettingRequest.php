<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateServiceSetting;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SettingId
 * @property string $SettingValue
 */
class UpdateServiceSettingRequest extends Request
{
    /**
     * @param array{
     *     SettingId: string,
     *     SettingValue: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
