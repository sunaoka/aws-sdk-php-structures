<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\CreateBillScenario;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 */
class CreateBillScenarioRequest extends Request
{
    /**
     * @param array{
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
