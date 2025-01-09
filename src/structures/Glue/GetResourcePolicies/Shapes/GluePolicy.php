<?php

namespace Sunaoka\Aws\Structures\Glue\GetResourcePolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PolicyInJson
 * @property string $PolicyHash
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property \Aws\Api\DateTimeResult $UpdateTime
 */
class GluePolicy extends Shape
{
    /**
     * @param array{
     *     PolicyInJson?: string,
     *     PolicyHash?: string,
     *     CreateTime?: \Aws\Api\DateTimeResult,
     *     UpdateTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
