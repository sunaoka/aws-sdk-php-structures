<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\CreateGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property Shapes\ResourceQuery|null $ResourceQuery
 * @property array<string, string>|null $Tags
 * @property list<Shapes\GroupConfigurationItem>|null $Configuration
 */
class CreateGroupRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     ResourceQuery?: Shapes\ResourceQuery|null,
     *     Tags?: array<string, string>|null,
     *     Configuration?: list<Shapes\GroupConfigurationItem>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
