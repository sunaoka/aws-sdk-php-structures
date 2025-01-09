<?php

namespace Sunaoka\Aws\Structures\Textract\ListAdapterVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AdapterId
 * @property \Aws\Api\DateTimeResult $AfterCreationTime
 * @property \Aws\Api\DateTimeResult $BeforeCreationTime
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListAdapterVersionsRequest extends Request
{
    /**
     * @param array{
     *     AdapterId?: string,
     *     AfterCreationTime?: \Aws\Api\DateTimeResult,
     *     BeforeCreationTime?: \Aws\Api\DateTimeResult,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
