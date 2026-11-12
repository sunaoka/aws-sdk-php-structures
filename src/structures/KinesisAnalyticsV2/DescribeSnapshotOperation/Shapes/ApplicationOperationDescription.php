<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DescribeSnapshotOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApplicationOperationId
 * @property string|null $ApplicationName
 */
class ApplicationOperationDescription extends Shape
{
    /**
     * @param array{
     *     ApplicationOperationId?: string|null,
     *     ApplicationName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
