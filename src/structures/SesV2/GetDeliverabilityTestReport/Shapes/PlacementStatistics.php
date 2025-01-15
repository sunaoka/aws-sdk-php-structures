<?php

namespace Sunaoka\Aws\Structures\SesV2\GetDeliverabilityTestReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $InboxPercentage
 * @property double|null $SpamPercentage
 * @property double|null $MissingPercentage
 * @property double|null $SpfPercentage
 * @property double|null $DkimPercentage
 */
class PlacementStatistics extends Shape
{
    /**
     * @param array{
     *     InboxPercentage?: double|null,
     *     SpamPercentage?: double|null,
     *     MissingPercentage?: double|null,
     *     SpfPercentage?: double|null,
     *     DkimPercentage?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
