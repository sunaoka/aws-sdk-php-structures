<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\CreateBillEstimate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $billScenarioId
 * @property string $name
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 */
class CreateBillEstimateRequest extends Request
{
    /**
     * @param array{
     *     billScenarioId: string,
     *     name: string,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
