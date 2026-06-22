<?php

namespace Sunaoka\Aws\Structures\GuardDuty\CreateInvestigation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property string $TriggerPrompt
 * @property string|null $ClientToken
 */
class CreateInvestigationRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     TriggerPrompt: string,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
