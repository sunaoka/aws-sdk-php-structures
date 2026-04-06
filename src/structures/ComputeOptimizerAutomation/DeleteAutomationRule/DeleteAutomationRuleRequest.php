<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\DeleteAutomationRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ruleArn
 * @property int $ruleRevision
 * @property string|null $clientToken
 */
class DeleteAutomationRuleRequest extends Request
{
    /**
     * @param array{
     *     ruleArn: string,
     *     ruleRevision: int,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
