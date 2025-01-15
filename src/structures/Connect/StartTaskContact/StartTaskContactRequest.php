<?php

namespace Sunaoka\Aws\Structures\Connect\StartTaskContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string|null $PreviousContactId
 * @property string|null $ContactFlowId
 * @property array<string, string>|null $Attributes
 * @property string $Name
 * @property array<string, Shapes\Reference>|null $References
 * @property string|null $Description
 * @property string|null $ClientToken
 * @property \Aws\Api\DateTimeResult|null $ScheduledTime
 * @property string|null $TaskTemplateId
 * @property string|null $QuickConnectId
 * @property string|null $RelatedContactId
 * @property array<string, Shapes\SegmentAttributeValue>|null $SegmentAttributes
 */
class StartTaskContactRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     PreviousContactId?: string|null,
     *     ContactFlowId?: string|null,
     *     Attributes?: array<string, string>|null,
     *     Name: string,
     *     References?: array<string, Shapes\Reference>|null,
     *     Description?: string|null,
     *     ClientToken?: string|null,
     *     ScheduledTime?: \Aws\Api\DateTimeResult|null,
     *     TaskTemplateId?: string|null,
     *     QuickConnectId?: string|null,
     *     RelatedContactId?: string|null,
     *     SegmentAttributes?: array<string, Shapes\SegmentAttributeValue>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
