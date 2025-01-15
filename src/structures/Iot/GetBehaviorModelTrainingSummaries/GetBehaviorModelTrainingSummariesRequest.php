<?php

namespace Sunaoka\Aws\Structures\Iot\GetBehaviorModelTrainingSummaries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $securityProfileName
 * @property int<1, 10>|null $maxResults
 * @property string|null $nextToken
 */
class GetBehaviorModelTrainingSummariesRequest extends Request
{
    /**
     * @param array{
     *     securityProfileName?: string|null,
     *     maxResults?: int<1, 10>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
