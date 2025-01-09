<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateKeyGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\KeyGroupConfig $KeyGroupConfig
 */
class CreateKeyGroupRequest extends Request
{
    /**
     * @param array{KeyGroupConfig: Shapes\KeyGroupConfig} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
