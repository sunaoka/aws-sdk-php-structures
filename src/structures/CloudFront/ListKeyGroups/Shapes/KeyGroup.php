<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListKeyGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property KeyGroupConfig $KeyGroupConfig
 */
class KeyGroup extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     LastModifiedTime: \Aws\Api\DateTimeResult,
     *     KeyGroupConfig: KeyGroupConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
