<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartAutomationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $AutomationGroupId
 * @property string $AutomationId
 * @property string|null $InputPayload
 */
class StartAutomationJobRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     AutomationGroupId: string,
     *     AutomationId: string,
     *     InputPayload?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
