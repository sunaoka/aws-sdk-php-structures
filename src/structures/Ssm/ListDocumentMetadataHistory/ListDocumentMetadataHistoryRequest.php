<?php

namespace Sunaoka\Aws\Structures\Ssm\ListDocumentMetadataHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $DocumentVersion
 * @property 'DocumentReviews' $Metadata
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListDocumentMetadataHistoryRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     DocumentVersion?: string,
     *     Metadata: 'DocumentReviews',
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
