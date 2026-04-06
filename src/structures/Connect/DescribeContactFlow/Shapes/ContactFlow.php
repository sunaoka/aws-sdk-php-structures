<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContactFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $Id
 * @property string|null $Name
 * @property 'CONTACT_FLOW'|'CUSTOMER_QUEUE'|'CUSTOMER_HOLD'|'CUSTOMER_WHISPER'|'AGENT_HOLD'|'AGENT_WHISPER'|'OUTBOUND_WHISPER'|'AGENT_TRANSFER'|'QUEUE_TRANSFER'|'CAMPAIGN'|null $Type
 * @property 'ACTIVE'|'ARCHIVED'|null $State
 * @property 'PUBLISHED'|'SAVED'|null $Status
 * @property string|null $Description
 * @property string|null $Content
 * @property array<string, string>|null $Tags
 * @property string|null $FlowContentSha256
 * @property int<1, max>|null $Version
 * @property string|null $VersionDescription
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property string|null $LastModifiedRegion
 */
class ContactFlow extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Id?: string|null,
     *     Name?: string|null,
     *     Type?: 'CONTACT_FLOW'|'CUSTOMER_QUEUE'|'CUSTOMER_HOLD'|'CUSTOMER_WHISPER'|'AGENT_HOLD'|'AGENT_WHISPER'|'OUTBOUND_WHISPER'|'AGENT_TRANSFER'|'QUEUE_TRANSFER'|'CAMPAIGN'|null,
     *     State?: 'ACTIVE'|'ARCHIVED'|null,
     *     Status?: 'PUBLISHED'|'SAVED'|null,
     *     Description?: string|null,
     *     Content?: string|null,
     *     Tags?: array<string, string>|null,
     *     FlowContentSha256?: string|null,
     *     Version?: int<1, max>|null,
     *     VersionDescription?: string|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedRegion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
