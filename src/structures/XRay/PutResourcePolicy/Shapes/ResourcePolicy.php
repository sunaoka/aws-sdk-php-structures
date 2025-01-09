<?php

namespace Sunaoka\Aws\Structures\XRay\PutResourcePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PolicyName
 * @property string $PolicyDocument
 * @property string $PolicyRevisionId
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 */
class ResourcePolicy extends Shape
{
    /**
     * @param array{
     *     PolicyName?: string,
     *     PolicyDocument?: string,
     *     PolicyRevisionId?: string,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
