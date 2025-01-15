<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateSubscriptionDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AmznClientToken
 * @property Shapes\SubscriptionDefinitionVersion|null $InitialVersion
 * @property string|null $Name
 * @property array<string, string>|null $tags
 */
class CreateSubscriptionDefinitionRequest extends Request
{
    /**
     * @param array{
     *     AmznClientToken?: string|null,
     *     InitialVersion?: Shapes\SubscriptionDefinitionVersion|null,
     *     Name?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
