<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateSubscriptionDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AmznClientToken
 * @property Shapes\SubscriptionDefinitionVersion $InitialVersion
 * @property string $Name
 * @property array<string, string> $tags
 */
class CreateSubscriptionDefinitionRequest extends Request
{
    /**
     * @param array{
     *     AmznClientToken?: string,
     *     InitialVersion?: Shapes\SubscriptionDefinitionVersion,
     *     Name?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
