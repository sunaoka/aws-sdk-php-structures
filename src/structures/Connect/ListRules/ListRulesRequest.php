<?php

namespace Sunaoka\Aws\Structures\Connect\ListRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property 'DRAFT'|'PUBLISHED' $PublishStatus
 * @property 'OnPostCallAnalysisAvailable'|'OnRealTimeCallAnalysisAvailable'|'OnRealTimeChatAnalysisAvailable'|'OnPostChatAnalysisAvailable'|'OnZendeskTicketCreate'|'OnZendeskTicketStatusUpdate'|'OnSalesforceCaseCreate'|'OnContactEvaluationSubmit'|'OnMetricDataUpdate'|'OnCaseCreate'|'OnCaseUpdate' $EventSourceName
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListRulesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     PublishStatus?: 'DRAFT'|'PUBLISHED',
     *     EventSourceName?: 'OnPostCallAnalysisAvailable'|'OnRealTimeCallAnalysisAvailable'|'OnRealTimeChatAnalysisAvailable'|'OnPostChatAnalysisAvailable'|'OnZendeskTicketCreate'|'OnZendeskTicketStatusUpdate'|'OnSalesforceCaseCreate'|'OnContactEvaluationSubmit'|'OnMetricDataUpdate'|'OnCaseCreate'|'OnCaseUpdate',
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
