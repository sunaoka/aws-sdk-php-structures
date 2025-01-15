<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeImageReplicationStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $region
 * @property string|null $registryId
 * @property 'IN_PROGRESS'|'COMPLETE'|'FAILED'|null $status
 * @property string|null $failureCode
 */
class ImageReplicationStatus extends Shape
{
    /**
     * @param array{
     *     region?: string|null,
     *     registryId?: string|null,
     *     status?: 'IN_PROGRESS'|'COMPLETE'|'FAILED'|null,
     *     failureCode?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
