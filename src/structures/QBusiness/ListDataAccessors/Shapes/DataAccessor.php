<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListDataAccessors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $displayName
 * @property string|null $dataAccessorId
 * @property string|null $dataAccessorArn
 * @property string|null $idcApplicationArn
 * @property string|null $principal
 * @property DataAccessorAuthenticationDetail|null $authenticationDetail
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class DataAccessor extends Shape
{
    /**
     * @param array{
     *     displayName?: string|null,
     *     dataAccessorId?: string|null,
     *     dataAccessorArn?: string|null,
     *     idcApplicationArn?: string|null,
     *     principal?: string|null,
     *     authenticationDetail?: DataAccessorAuthenticationDetail|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
