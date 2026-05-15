<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetOpportunity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Months' $Term
 * @property string $Value
 */
class ExpectedContractDuration extends Shape
{
    /**
     * @param array{
     *     Term: 'Months',
     *     Value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
