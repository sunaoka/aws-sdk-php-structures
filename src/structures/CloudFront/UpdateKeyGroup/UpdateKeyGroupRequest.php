<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateKeyGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\KeyGroupConfig $KeyGroupConfig
 * @property string $Id
 * @property string $IfMatch
 */
class UpdateKeyGroupRequest extends Request
{
    /**
     * @param array{
     *     KeyGroupConfig: Shapes\KeyGroupConfig,
     *     Id: string,
     *     IfMatch?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
