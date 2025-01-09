<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\DeleteBillScenario;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 */
class DeleteBillScenarioRequest extends Request
{
    /**
     * @param array{identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
