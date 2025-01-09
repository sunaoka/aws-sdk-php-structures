<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeImageReplicationStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $region
 * @property string $registryId
 * @property 'IN_PROGRESS'|'COMPLETE'|'FAILED' $status
 * @property string $failureCode
 */
class ImageReplicationStatus extends Shape
{
    /**
     * @param array{
     *     region?: string,
     *     registryId?: string,
     *     status?: 'IN_PROGRESS'|'COMPLETE'|'FAILED',
     *     failureCode?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
