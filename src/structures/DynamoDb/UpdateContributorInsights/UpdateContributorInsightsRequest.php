<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateContributorInsights;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TableName
 * @property string|null $IndexName
 * @property 'ENABLE'|'DISABLE' $ContributorInsightsAction
 */
class UpdateContributorInsightsRequest extends Request
{
    /**
     * @param array{
     *     TableName: string,
     *     IndexName?: string|null,
     *     ContributorInsightsAction: 'ENABLE'|'DISABLE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
