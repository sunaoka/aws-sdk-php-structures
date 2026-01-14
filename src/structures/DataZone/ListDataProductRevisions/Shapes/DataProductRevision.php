<?php

namespace Sunaoka\Aws\Structures\DataZone\ListDataProductRevisions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $domainId
 * @property string|null $id
 * @property string|null $revision
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 */
class DataProductRevision extends Shape
{
    /**
     * @param array{
     *     domainId?: string|null,
     *     id?: string|null,
     *     revision?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     createdBy?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
