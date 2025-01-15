<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateKeyGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\KeyGroupConfig $KeyGroupConfig
 * @property string $Id
 * @property string|null $IfMatch
 */
class UpdateKeyGroupRequest extends Request
{
    /**
     * @param array{
     *     KeyGroupConfig: Shapes\KeyGroupConfig,
     *     Id: string,
     *     IfMatch?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
