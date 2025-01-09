<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListIndices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $nextToken
 * @property int<1, 100> $maxResults
 */
class ListIndicesRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
