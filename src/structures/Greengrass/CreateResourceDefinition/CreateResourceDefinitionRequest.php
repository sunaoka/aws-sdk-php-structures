<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateResourceDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AmznClientToken
 * @property Shapes\ResourceDefinitionVersion|null $InitialVersion
 * @property string|null $Name
 * @property array<string, string>|null $tags
 */
class CreateResourceDefinitionRequest extends Request
{
    /**
     * @param array{
     *     AmznClientToken?: string|null,
     *     InitialVersion?: Shapes\ResourceDefinitionVersion|null,
     *     Name?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
