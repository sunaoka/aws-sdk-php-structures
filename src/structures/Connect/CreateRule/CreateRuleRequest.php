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
 * @property string $ClientToken
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
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
