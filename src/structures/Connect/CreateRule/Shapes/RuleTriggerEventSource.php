<?php

namespace Sunaoka\Aws\Structures\Connect\CreateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OnPostCallAnalysisAvailable'|'OnRealTimeCallAnalysisAvailable'|'OnRealTimeChatAnalysisAvailable'|'OnPostChatAnalysisAvailable'|'OnZendeskTicketCreate'|'OnZendeskTicketStatusUpdate'|'OnSalesforceCaseCreate'|'OnContactEvaluationSubmit'|'OnMetricDataUpdate'|'OnCaseCreate'|'OnCaseUpdate'|'OnSlaBreach' $EventSourceName
 * @property string|null $IntegrationAssociationId
 */
class RuleTriggerEventSource extends Shape
{
    /**
     * @param array{
     *     EventSourceName: 'OnPostCallAnalysisAvailable'|'OnRealTimeCallAnalysisAvailable'|'OnRealTimeChatAnalysisAvailable'|'OnPostChatAnalysisAvailable'|'OnZendeskTicketCreate'|'OnZendeskTicketStatusUpdate'|'OnSalesforceCaseCreate'|'OnContactEvaluationSubmit'|'OnMetricDataUpdate'|'OnCaseCreate'|'OnCaseUpdate'|'OnSlaBreach',
     *     IntegrationAssociationId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
