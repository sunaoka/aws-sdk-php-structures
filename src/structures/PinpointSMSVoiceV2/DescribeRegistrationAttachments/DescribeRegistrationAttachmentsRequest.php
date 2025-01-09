<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrationAttachments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $RegistrationAttachmentIds
 * @property list<Shapes\RegistrationAttachmentFilter> $Filters
 * @property string $NextToken
 * @property int $MaxResults
 */
class DescribeRegistrationAttachmentsRequest extends Request
{
    /**
     * @param array{
     *     RegistrationAttachmentIds?: list<string>,
     *     Filters?: list<Shapes\RegistrationAttachmentFilter>,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
