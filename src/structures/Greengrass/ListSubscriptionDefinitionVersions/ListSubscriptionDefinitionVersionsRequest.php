<?php

namespace Sunaoka\Aws\Structures\Greengrass\ListSubscriptionDefinitionVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $MaxResults
 * @property string|null $NextToken
 * @property string $SubscriptionDefinitionId
 */
class ListSubscriptionDefinitionVersionsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: string|null,
     *     NextToken?: string|null,
     *     SubscriptionDefinitionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
