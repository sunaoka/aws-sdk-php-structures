<?php

namespace Sunaoka\Aws\Structures\DataZone\ListAssetRevisions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $domainId
 * @property string|null $id
 * @property string|null $revision
 * @property string|null $createdBy
 * @property \Aws\Api\DateTimeResult|null $createdAt
 */
class AssetRevision extends Shape
{
    /**
     * @param array{
     *     domainId?: string|null,
     *     id?: string|null,
     *     revision?: string|null,
     *     createdBy?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
