<?php

namespace Sunaoka\Aws\Structures\DataZone\ListDataProductRevisions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property string|null $domainId
 * @property string|null $id
 * @property string|null $revision
 */
class DataProductRevision extends Shape
{
    /**
     * @param array{
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     createdBy?: string|null,
     *     domainId?: string|null,
     *     id?: string|null,
     *     revision?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
