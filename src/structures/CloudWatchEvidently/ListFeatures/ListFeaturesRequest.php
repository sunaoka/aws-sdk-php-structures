<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\ListFeatures;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $maxResults
 * @property string $nextToken
 * @property string $project
 */
class ListFeaturesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int,
     *     nextToken?: string,
     *     project: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
