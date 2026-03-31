<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\GetOperatorApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $operatorAppRoleArn
 * @property string $idcInstanceArn
 * @property string|null $idcApplicationArn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class IdcAuthConfiguration extends Shape
{
    /**
     * @param array{
     *     operatorAppRoleArn: string,
     *     idcInstanceArn: string,
     *     idcApplicationArn?: string|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
