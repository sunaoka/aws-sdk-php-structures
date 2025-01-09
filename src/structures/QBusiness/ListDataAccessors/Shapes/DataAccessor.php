<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListDataAccessors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $displayName
 * @property string $dataAccessorId
 * @property string $dataAccessorArn
 * @property string $idcApplicationArn
 * @property string $principal
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class DataAccessor extends Shape
{
    /**
     * @param array{
     *     displayName?: string,
     *     dataAccessorId?: string,
     *     dataAccessorArn?: string,
     *     idcApplicationArn?: string,
     *     principal?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     updatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
