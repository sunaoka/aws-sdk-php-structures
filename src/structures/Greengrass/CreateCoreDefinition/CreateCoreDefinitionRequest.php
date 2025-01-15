<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateCoreDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AmznClientToken
 * @property Shapes\CoreDefinitionVersion|null $InitialVersion
 * @property string|null $Name
 * @property array<string, string>|null $tags
 */
class CreateCoreDefinitionRequest extends Request
{
    /**
     * @param array{
     *     AmznClientToken?: string|null,
     *     InitialVersion?: Shapes\CoreDefinitionVersion|null,
     *     Name?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
