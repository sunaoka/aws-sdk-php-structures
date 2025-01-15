<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetSubscriptionDefinitionVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property string $SubscriptionDefinitionId
 * @property string $SubscriptionDefinitionVersionId
 */
class GetSubscriptionDefinitionVersionRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     SubscriptionDefinitionId: string,
     *     SubscriptionDefinitionVersionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
