<?php

namespace Sunaoka\Aws\Structures\Connect\ListRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $RuleId
 * @property string $RuleArn
 * @property 'OnPostCallAnalysisAvailable'|'OnRealTimeCallAnalysisAvailable'|'OnRealTimeChatAnalysisAvailable'|'OnPostChatAnalysisAvailable'|'OnZendeskTicketCreate'|'OnZendeskTicketStatusUpdate'|'OnSalesforceCaseCreate'|'OnContactEvaluationSubmit'|'OnMetricDataUpdate'|'OnCaseCreate'|'OnCaseUpdate'|'OnSlaBreach' $EventSourceName
 * @property 'DRAFT'|'PUBLISHED' $PublishStatus
 * @property list<ActionSummary> $ActionSummaries
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 */
class RuleSummary extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     RuleId: string,
     *     RuleArn: string,
     *     EventSourceName: 'OnPostCallAnalysisAvailable'|'OnRealTimeCallAnalysisAvailable'|'OnRealTimeChatAnalysisAvailable'|'OnPostChatAnalysisAvailable'|'OnZendeskTicketCreate'|'OnZendeskTicketStatusUpdate'|'OnSalesforceCaseCreate'|'OnContactEvaluationSubmit'|'OnMetricDataUpdate'|'OnCaseCreate'|'OnCaseUpdate'|'OnSlaBreach',
     *     PublishStatus: 'DRAFT'|'PUBLISHED',
     *     ActionSummaries: list<ActionSummary>,
     *     CreatedTime: \Aws\Api\DateTimeResult,
     *     LastUpdatedTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
