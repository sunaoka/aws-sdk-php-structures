<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|null $Status
 * @property ReferenceLineDataConfiguration $DataConfiguration
 * @property ReferenceLineStyleConfiguration|null $StyleConfiguration
 * @property ReferenceLineLabelConfiguration|null $LabelConfiguration
 */
class ReferenceLine extends Shape
{
    /**
     * @param array{
     *     Status?: 'ENABLED'|'DISABLED'|null,
     *     DataConfiguration: ReferenceLineDataConfiguration,
     *     StyleConfiguration?: ReferenceLineStyleConfiguration|null,
     *     LabelConfiguration?: ReferenceLineLabelConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
