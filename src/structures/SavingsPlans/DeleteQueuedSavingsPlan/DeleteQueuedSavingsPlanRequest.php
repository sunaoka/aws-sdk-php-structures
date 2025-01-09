<?php

namespace Sunaoka\Aws\Structures\SavingsPlans\DeleteQueuedSavingsPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $savingsPlanId
 */
class DeleteQueuedSavingsPlanRequest extends Request
{
    /**
     * @param array{savingsPlanId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
