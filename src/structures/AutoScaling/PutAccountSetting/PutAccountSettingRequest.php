<?php

namespace Sunaoka\Aws\Structures\AutoScaling\PutAccountSetting;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Value
 */
class PutAccountSettingRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
