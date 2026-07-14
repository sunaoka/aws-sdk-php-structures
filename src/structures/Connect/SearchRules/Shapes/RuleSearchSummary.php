<?php

namespace Sunaoka\Aws\Structures\Connect\SearchRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $RuleId
 * @property string $RuleArn
 * @property RuleTriggerEventSource $TriggerEventSource
 * @property list<ActionSummary> $ActionSummaries
 * @property list<'GenerativeAI'>|null $RuleCapabilityTiers
 * @property 'DRAFT'|'PUBLISHED' $PublishStatus
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property string $LastUpdatedBy
 * @property array<string, string>|null $Tags
 */
class RuleSearchSummary extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     RuleId: string,
     *     RuleArn: string,
     *     TriggerEventSource: RuleTriggerEventSource,
     *     ActionSummaries: list<ActionSummary>,
     *     RuleCapabilityTiers?: list<'GenerativeAI'>|null,
     *     PublishStatus: 'DRAFT'|'PUBLISHED',
     *     CreatedTime: \Aws\Api\DateTimeResult,
     *     LastUpdatedTime: \Aws\Api\DateTimeResult,
     *     LastUpdatedBy: string,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
