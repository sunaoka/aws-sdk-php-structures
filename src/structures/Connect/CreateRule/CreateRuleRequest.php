<?php

namespace Sunaoka\Aws\Structures\Connect\CreateRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $Name
 * @property Shapes\RuleTriggerEventSource $TriggerEventSource
 * @property string $Function
 * @property list<Shapes\RuleAction> $Actions
 * @property 'DRAFT'|'PUBLISHED' $PublishStatus
 * @property Shapes\PreEvaluationFilters|null $PreEvaluationFilters
 * @property string|null $ClientToken
 * @property array<string, string>|null $Tags
 */
class CreateRuleRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     Name: string,
     *     TriggerEventSource: Shapes\RuleTriggerEventSource,
     *     Function: string,
     *     Actions: list<Shapes\RuleAction>,
     *     PublishStatus: 'DRAFT'|'PUBLISHED',
     *     PreEvaluationFilters?: Shapes\PreEvaluationFilters|null,
     *     ClientToken?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
