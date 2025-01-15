<?php

namespace Sunaoka\Aws\Structures\Greengrass\UpdateSubscriptionDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Name
 * @property string $SubscriptionDefinitionId
 */
class UpdateSubscriptionDefinitionRequest extends Request
{
    /**
     * @param array{
     *     Name?: string|null,
     *     SubscriptionDefinitionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
