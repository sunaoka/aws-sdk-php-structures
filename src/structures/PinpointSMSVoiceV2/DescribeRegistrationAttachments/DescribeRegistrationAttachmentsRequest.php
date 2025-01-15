<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrationAttachments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $RegistrationAttachmentIds
 * @property list<Shapes\RegistrationAttachmentFilter>|null $Filters
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class DescribeRegistrationAttachmentsRequest extends Request
{
    /**
     * @param array{
     *     RegistrationAttachmentIds?: list<string>|null,
     *     Filters?: list<Shapes\RegistrationAttachmentFilter>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
