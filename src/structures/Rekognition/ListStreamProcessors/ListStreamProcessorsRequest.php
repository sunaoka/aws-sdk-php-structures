<?php

namespace Sunaoka\Aws\Structures\Rekognition\ListStreamProcessors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, max>|null $MaxResults
 */
class ListStreamProcessorsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
