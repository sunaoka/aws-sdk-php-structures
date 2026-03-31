<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\EnableOperatorApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $operatorAppRoleArn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class IamAuthConfiguration extends Shape
{
    /**
     * @param array{
     *     operatorAppRoleArn: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
