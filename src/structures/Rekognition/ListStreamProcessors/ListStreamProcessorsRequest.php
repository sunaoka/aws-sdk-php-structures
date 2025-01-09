<?php

namespace Sunaoka\Aws\Structures\Rekognition\ListStreamProcessors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<1, max> $MaxResults
 */
class ListStreamProcessorsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int<1, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
