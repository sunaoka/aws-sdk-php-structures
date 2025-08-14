<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateContributorInsights;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TableName
 * @property string|null $IndexName
 * @property 'ENABLE'|'DISABLE' $ContributorInsightsAction
 * @property 'ACCESSED_AND_THROTTLED_KEYS'|'THROTTLED_KEYS'|null $ContributorInsightsMode
 */
class UpdateContributorInsightsRequest extends Request
{
    /**
     * @param array{
     *     TableName: string,
     *     IndexName?: string|null,
     *     ContributorInsightsAction: 'ENABLE'|'DISABLE',
     *     ContributorInsightsMode?: 'ACCESSED_AND_THROTTLED_KEYS'|'THROTTLED_KEYS'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
