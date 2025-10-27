<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetResourcesStatisticsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ResourceTags'|null $FieldName
 * @property MapFilter|null $Filter
 */
class ResourcesMapFilter extends Shape
{
    /**
     * @param array{
     *     FieldName?: 'ResourceTags'|null,
     *     Filter?: MapFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
