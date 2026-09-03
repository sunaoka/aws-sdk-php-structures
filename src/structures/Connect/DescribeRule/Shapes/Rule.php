<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $RuleId
 * @property string $RuleArn
 * @property RuleTriggerEventSource $TriggerEventSource
 * @property list<'GenerativeAI'>|null $RuleCapabilityTiers
 * @property string $Function
 * @property list<RuleAction> $Actions
 * @property 'DRAFT'|'PUBLISHED' $PublishStatus
 * @property PreEvaluationFilters|null $PreEvaluationFilters
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property string $LastUpdatedBy
 * @property array<string, string>|null $Tags
 */
class Rule extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     RuleId: string,
     *     RuleArn: string,
     *     TriggerEventSource: RuleTriggerEventSource,
     *     RuleCapabilityTiers?: list<'GenerativeAI'>|null,
     *     Function: string,
     *     Actions: list<RuleAction>,
     *     PublishStatus: 'DRAFT'|'PUBLISHED',
     *     PreEvaluationFilters?: PreEvaluationFilters|null,
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
