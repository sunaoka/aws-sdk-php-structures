<?php

namespace Sunaoka\Aws\Structures\Iot\GetBehaviorModelTrainingSummaries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $securityProfileName
 * @property int $maxResults
 * @property string $nextToken
 */
class GetBehaviorModelTrainingSummariesRequest extends Request
{
    /**
     * @param array{
     *     securityProfileName?: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
