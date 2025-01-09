<?php

namespace Sunaoka\Aws\Structures\Connect\StartTaskContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $PreviousContactId
 * @property string $ContactFlowId
 * @property array<string, string> $Attributes
 * @property string $Name
 * @property array<string, Shapes\Reference> $References
 * @property string $Description
 * @property string $ClientToken
 * @property \Aws\Api\DateTimeResult $ScheduledTime
 * @property string $TaskTemplateId
 * @property string $QuickConnectId
 * @property string $RelatedContactId
 * @property array<string, Shapes\SegmentAttributeValue> $SegmentAttributes
 */
class StartTaskContactRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     PreviousContactId?: string,
     *     ContactFlowId?: string,
     *     Attributes?: array<string, string>,
     *     Name: string,
     *     References?: array<string, Shapes\Reference>,
     *     Description?: string,
     *     ClientToken?: string,
     *     ScheduledTime?: \Aws\Api\DateTimeResult,
     *     TaskTemplateId?: string,
     *     QuickConnectId?: string,
     *     RelatedContactId?: string,
     *     SegmentAttributes?: array<string, Shapes\SegmentAttributeValue>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
