<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 20> $MaxResults
 * @property string $NextToken
 */
class ListVersionsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 20>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
