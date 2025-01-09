<?php

namespace Sunaoka\Aws\Structures\DataZone\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string $description
 * @property string $domainId
 * @property string $id
 * @property string $name
 * @property string $owningProjectId
 * @property 'DISABLED'|'ENABLED' $status
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $updatedBy
 */
class GlossaryItem extends Shape
{
    /**
     * @param array{
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     createdBy?: string,
     *     description?: string,
     *     domainId: string,
     *     id: string,
     *     name: string,
     *     owningProjectId: string,
     *     status: 'DISABLED'|'ENABLED',
     *     updatedAt?: \Aws\Api\DateTimeResult,
     *     updatedBy?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
