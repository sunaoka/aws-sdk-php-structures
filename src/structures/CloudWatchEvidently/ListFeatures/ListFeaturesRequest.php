<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\ListFeatures;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property string $project
 */
class ListFeaturesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     project: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
