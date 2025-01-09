<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetSubscriptionDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SubscriptionDefinitionId
 */
class GetSubscriptionDefinitionRequest extends Request
{
    /**
     * @param array{SubscriptionDefinitionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
