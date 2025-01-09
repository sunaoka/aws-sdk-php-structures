<?php

namespace Sunaoka\Aws\Structures\SavingsPlans\ReturnSavingsPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $savingsPlanId
 * @property string $clientToken
 */
class ReturnSavingsPlanRequest extends Request
{
    /**
     * @param array{
     *     savingsPlanId: string,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
