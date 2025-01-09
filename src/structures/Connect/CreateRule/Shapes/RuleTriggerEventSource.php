<?php

namespace Sunaoka\Aws\Structures\Connect\CreateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OnPostCallAnalysisAvailable'|'OnRealTimeCallAnalysisAvailable'|'OnRealTimeChatAnalysisAvailable'|'OnPostChatAnalysisAvailable'|'OnZendeskTicketCreate'|'OnZendeskTicketStatusUpdate'|'OnSalesforceCaseCreate'|'OnContactEvaluationSubmit'|'OnMetricDataUpdate'|'OnCaseCreate'|'OnCaseUpdate' $EventSourceName
 * @property string $IntegrationAssociationId
 */
class RuleTriggerEventSource extends Shape
{
    /**
     * @param array{
     *     EventSourceName: 'OnPostCallAnalysisAvailable'|'OnRealTimeCallAnalysisAvailable'|'OnRealTimeChatAnalysisAvailable'|'OnPostChatAnalysisAvailable'|'OnZendeskTicketCreate'|'OnZendeskTicketStatusUpdate'|'OnSalesforceCaseCreate'|'OnContactEvaluationSubmit'|'OnMetricDataUpdate'|'OnCaseCreate'|'OnCaseUpdate',
     *     IntegrationAssociationId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
