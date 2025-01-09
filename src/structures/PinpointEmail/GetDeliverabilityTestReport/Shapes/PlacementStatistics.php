<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\GetDeliverabilityTestReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $InboxPercentage
 * @property double $SpamPercentage
 * @property double $MissingPercentage
 * @property double $SpfPercentage
 * @property double $DkimPercentage
 */
class PlacementStatistics extends Shape
{
    /**
     * @param array{
     *     InboxPercentage?: double,
     *     SpamPercentage?: double,
     *     MissingPercentage?: double,
     *     SpfPercentage?: double,
     *     DkimPercentage?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
