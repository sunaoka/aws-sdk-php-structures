<?php

namespace Sunaoka\Aws\Structures\CostExplorer\ListCommitmentPurchaseAnalyses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Start
 * @property string $End
 */
class DateInterval extends Shape
{
    /**
     * @param array{
     *     Start: string,
     *     End: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
