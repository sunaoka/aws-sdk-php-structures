<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContactFlows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Id
 * @property string $Name
 * @property 'CONTACT_FLOW'|'CUSTOMER_QUEUE'|'CUSTOMER_HOLD'|'CUSTOMER_WHISPER'|'AGENT_HOLD'|'AGENT_WHISPER'|'OUTBOUND_WHISPER'|'AGENT_TRANSFER'|'QUEUE_TRANSFER' $Type
 * @property 'ACTIVE'|'ARCHIVED' $State
 * @property 'PUBLISHED'|'SAVED' $Status
 * @property string $Description
 * @property string $Content
 * @property array<string, string> $Tags
 * @property string $FlowContentSha256
 * @property int $Version
 * @property string $VersionDescription
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $LastModifiedRegion
 */
class ContactFlow extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     Id?: string,
     *     Name?: string,
     *     Type?: 'CONTACT_FLOW'|'CUSTOMER_QUEUE'|'CUSTOMER_HOLD'|'CUSTOMER_WHISPER'|'AGENT_HOLD'|'AGENT_WHISPER'|'OUTBOUND_WHISPER'|'AGENT_TRANSFER'|'QUEUE_TRANSFER',
     *     State?: 'ACTIVE'|'ARCHIVED',
     *     Status?: 'PUBLISHED'|'SAVED',
     *     Description?: string,
     *     Content?: string,
     *     Tags?: array<string, string>,
     *     FlowContentSha256?: string,
     *     Version?: int,
     *     VersionDescription?: string,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedRegion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
