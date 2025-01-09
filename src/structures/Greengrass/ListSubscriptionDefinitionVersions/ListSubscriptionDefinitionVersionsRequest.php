<?php

namespace Sunaoka\Aws\Structures\Greengrass\ListSubscriptionDefinitionVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MaxResults
 * @property string $NextToken
 * @property string $SubscriptionDefinitionId
 */
class ListSubscriptionDefinitionVersionsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: string,
     *     NextToken?: string,
     *     SubscriptionDefinitionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
