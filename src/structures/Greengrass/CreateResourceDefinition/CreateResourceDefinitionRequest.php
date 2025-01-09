<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateResourceDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AmznClientToken
 * @property Shapes\ResourceDefinitionVersion $InitialVersion
 * @property string $Name
 * @property array<string, string> $tags
 */
class CreateResourceDefinitionRequest extends Request
{
    /**
     * @param array{
     *     AmznClientToken?: string,
     *     InitialVersion?: Shapes\ResourceDefinitionVersion,
     *     Name?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
