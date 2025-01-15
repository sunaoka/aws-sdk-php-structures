<?php

namespace Sunaoka\Aws\Structures\Ssm\ListDocumentMetadataHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $DocumentVersion
 * @property 'DocumentReviews' $Metadata
 * @property string|null $NextToken
 * @property int<1, 50>|null $MaxResults
 */
class ListDocumentMetadataHistoryRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     DocumentVersion?: string|null,
     *     Metadata: 'DocumentReviews',
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
