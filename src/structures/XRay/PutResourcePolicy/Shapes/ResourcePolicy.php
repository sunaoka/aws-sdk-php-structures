<?php

namespace Sunaoka\Aws\Structures\XRay\PutResourcePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PolicyName
 * @property string|null $PolicyDocument
 * @property string|null $PolicyRevisionId
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 */
class ResourcePolicy extends Shape
{
    /**
     * @param array{
     *     PolicyName?: string|null,
     *     PolicyDocument?: string|null,
     *     PolicyRevisionId?: string|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
