<?php

namespace Sunaoka\Aws\Structures\Connect\ListRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property 'DRAFT'|'PUBLISHED'|null $PublishStatus
 * @property 'OnPostCallAnalysisAvailable'|'OnRealTimeCallAnalysisAvailable'|'OnRealTimeChatAnalysisAvailable'|'OnPostChatAnalysisAvailable'|'OnZendeskTicketCreate'|'OnZendeskTicketStatusUpdate'|'OnSalesforceCaseCreate'|'OnContactEvaluationSubmit'|'OnMetricDataUpdate'|'OnCaseCreate'|'OnCaseUpdate'|null $EventSourceName
 * @property int<1, 200>|null $MaxResults
 * @property string|null $NextToken
 */
class ListRulesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     PublishStatus?: 'DRAFT'|'PUBLISHED'|null,
     *     EventSourceName?: 'OnPostCallAnalysisAvailable'|'OnRealTimeCallAnalysisAvailable'|'OnRealTimeChatAnalysisAvailable'|'OnPostChatAnalysisAvailable'|'OnZendeskTicketCreate'|'OnZendeskTicketStatusUpdate'|'OnSalesforceCaseCreate'|'OnContactEvaluationSubmit'|'OnMetricDataUpdate'|'OnCaseCreate'|'OnCaseUpdate'|null,
     *     MaxResults?: int<1, 200>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
