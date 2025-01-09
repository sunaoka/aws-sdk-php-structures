<?php

namespace Sunaoka\Aws\Structures\Ecr\PutAccountSetting;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $value
 */
class PutAccountSettingRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
