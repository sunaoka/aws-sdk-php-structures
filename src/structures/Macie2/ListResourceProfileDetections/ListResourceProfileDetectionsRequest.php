<?php

namespace Sunaoka\Aws\Structures\Macie2\ListResourceProfileDetections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 25> $maxResults
 * @property string $nextToken
 * @property string $resourceArn
 */
class ListResourceProfileDetectionsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 25>,
     *     nextToken?: string,
     *     resourceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
