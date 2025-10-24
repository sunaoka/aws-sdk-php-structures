<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetResourcesStatisticsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ResourceDetailCaptureTime'|'ResourceCreationTime'|null $FieldName
 * @property DateFilter|null $Filter
 */
class ResourcesDateFilter extends Shape
{
    /**
     * @param array{
     *     FieldName?: 'ResourceDetailCaptureTime'|'ResourceCreationTime'|null,
     *     Filter?: DateFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
