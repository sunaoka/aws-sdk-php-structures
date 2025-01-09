<?php

namespace Sunaoka\Aws\Structures\Ssm\ResetServiceSetting;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SettingId
 */
class ResetServiceSettingRequest extends Request
{
    /**
     * @param array{SettingId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
