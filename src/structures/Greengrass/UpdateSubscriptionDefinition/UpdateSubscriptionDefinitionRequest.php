<?php

namespace Sunaoka\Aws\Structures\Greengrass\UpdateSubscriptionDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $SubscriptionDefinitionId
 */
class UpdateSubscriptionDefinitionRequest extends Request
{
    /**
     * @param array{
     *     Name?: string,
     *     SubscriptionDefinitionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
