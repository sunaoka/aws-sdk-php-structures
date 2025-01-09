<?php

namespace Sunaoka\Aws\Structures\Iot\GetBehaviorModelTrainingSummaries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $securityProfileName
 * @property int<1, 10> $maxResults
 * @property string $nextToken
 */
class GetBehaviorModelTrainingSummariesRequest extends Request
{
    /**
     * @param array{
     *     securityProfileName?: string,
     *     maxResults?: int<1, 10>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
