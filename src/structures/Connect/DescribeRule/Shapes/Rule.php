<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $RuleId
 * @property string $RuleArn
 * @property RuleTriggerEventSource $TriggerEventSource
 * @property string $Function
 * @property list<RuleAction> $Actions
 * @property 'DRAFT'|'PUBLISHED' $PublishStatus
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property string $LastUpdatedBy
 * @property array<string, string> $Tags
 */
class Rule extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     RuleId: string,
     *     RuleArn: string,
     *     TriggerEventSource: RuleTriggerEventSource,
     *     Function: string,
     *     Actions: list<RuleAction>,
     *     PublishStatus: 'DRAFT'|'PUBLISHED',
     *     CreatedTime: \Aws\Api\DateTimeResult,
     *     LastUpdatedTime: \Aws\Api\DateTimeResult,
     *     LastUpdatedBy: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
