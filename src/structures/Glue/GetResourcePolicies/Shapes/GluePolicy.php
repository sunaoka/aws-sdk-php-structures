<?php

namespace Sunaoka\Aws\Structures\Glue\GetResourcePolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PolicyInJson
 * @property string|null $PolicyHash
 * @property \Aws\Api\DateTimeResult|null $CreateTime
 * @property \Aws\Api\DateTimeResult|null $UpdateTime
 */
class GluePolicy extends Shape
{
    /**
     * @param array{
     *     PolicyInJson?: string|null,
     *     PolicyHash?: string|null,
     *     CreateTime?: \Aws\Api\DateTimeResult|null,
     *     UpdateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
