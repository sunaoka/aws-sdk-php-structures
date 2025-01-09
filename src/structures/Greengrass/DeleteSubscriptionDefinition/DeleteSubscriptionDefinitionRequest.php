<?php

namespace Sunaoka\Aws\Structures\Greengrass\DeleteSubscriptionDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SubscriptionDefinitionId
 */
class DeleteSubscriptionDefinitionRequest extends Request
{
    /**
     * @param array{SubscriptionDefinitionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
