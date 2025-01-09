<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateContributorInsights;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TableName
 * @property string $IndexName
 * @property 'ENABLE'|'DISABLE' $ContributorInsightsAction
 */
class UpdateContributorInsightsRequest extends Request
{
    /**
     * @param array{
     *     TableName: string,
     *     IndexName?: string,
     *     ContributorInsightsAction: 'ENABLE'|'DISABLE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
