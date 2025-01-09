<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\CreateBillScenario;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $clientToken
 * @property array<string, string> $tags
 */
class CreateBillScenarioRequest extends Request
{
    /**
     * @param array{
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
