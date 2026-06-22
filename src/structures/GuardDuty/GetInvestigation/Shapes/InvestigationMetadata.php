<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetInvestigation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Version
 * @property Product $Product
 */
class InvestigationMetadata extends Shape
{
    /**
     * @param array{
     *     Version: string,
     *     Product: Product
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
