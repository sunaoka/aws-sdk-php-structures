<?php

namespace Sunaoka\Aws\Structures\Textract\ListAdapters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $AfterCreationTime
 * @property \Aws\Api\DateTimeResult $BeforeCreationTime
 * @property int<1, max> $MaxResults
 * @property string $NextToken
 */
class ListAdaptersRequest extends Request
{
    /**
     * @param array{
     *     AfterCreationTime?: \Aws\Api\DateTimeResult,
     *     BeforeCreationTime?: \Aws\Api\DateTimeResult,
     *     MaxResults?: int<1, max>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
