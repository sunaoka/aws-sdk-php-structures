<?php

namespace Sunaoka\Aws\Structures\Ecr\GetAccountSetting;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class GetAccountSettingRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
