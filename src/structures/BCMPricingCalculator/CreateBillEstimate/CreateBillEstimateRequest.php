<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\CreateBillEstimate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $billScenarioId
 * @property string $name
 * @property string $clientToken
 * @property array<string, string> $tags
 */
class CreateBillEstimateRequest extends Request
{
    /**
     * @param array{
     *     billScenarioId: string,
     *     name: string,
     *     clientToken?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
