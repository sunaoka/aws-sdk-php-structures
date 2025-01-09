<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $Status
 * @property ReferenceLineDataConfiguration $DataConfiguration
 * @property ReferenceLineStyleConfiguration $StyleConfiguration
 * @property ReferenceLineLabelConfiguration $LabelConfiguration
 */
class ReferenceLine extends Shape
{
    /**
     * @param array{
     *     Status?: 'ENABLED'|'DISABLED',
     *     DataConfiguration: ReferenceLineDataConfiguration,
     *     StyleConfiguration?: ReferenceLineStyleConfiguration,
     *     LabelConfiguration?: ReferenceLineLabelConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
