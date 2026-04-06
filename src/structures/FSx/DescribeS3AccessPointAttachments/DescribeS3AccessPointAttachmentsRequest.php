<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeS3AccessPointAttachments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $Names
 * @property list<Shapes\S3AccessPointAttachmentsFilter>|null $Filters
 * @property int<1, 2147483647>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeS3AccessPointAttachmentsRequest extends Request
{
    /**
     * @param array{
     *     Names?: list<string>|null,
     *     Filters?: list<Shapes\S3AccessPointAttachmentsFilter>|null,
     *     MaxResults?: int<1, 2147483647>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
