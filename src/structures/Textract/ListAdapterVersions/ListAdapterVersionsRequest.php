<?php

namespace Sunaoka\Aws\Structures\Textract\ListAdapterVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AdapterId
 * @property \Aws\Api\DateTimeResult|null $AfterCreationTime
 * @property \Aws\Api\DateTimeResult|null $BeforeCreationTime
 * @property int<1, max>|null $MaxResults
 * @property string|null $NextToken
 */
class ListAdapterVersionsRequest extends Request
{
    /**
     * @param array{
     *     AdapterId?: string|null,
     *     AfterCreationTime?: \Aws\Api\DateTimeResult|null,
     *     BeforeCreationTime?: \Aws\Api\DateTimeResult|null,
     *     MaxResults?: int<1, max>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
