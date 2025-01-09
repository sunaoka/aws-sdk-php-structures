<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\GetBillScenario;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 */
class GetBillScenarioRequest extends Request
{
    /**
     * @param array{identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
