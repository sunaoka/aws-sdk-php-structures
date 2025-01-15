<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\CreateGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property Shapes\ResourceQuery|null $ResourceQuery
 * @property array<string, string>|null $Tags
 * @property list<Shapes\GroupConfigurationItem>|null $Configuration
 * @property int<1, 10>|null $Criticality
 * @property string|null $Owner
 * @property string|null $DisplayName
 */
class CreateGroupRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     ResourceQuery?: Shapes\ResourceQuery|null,
     *     Tags?: array<string, string>|null,
     *     Configuration?: list<Shapes\GroupConfigurationItem>|null,
     *     Criticality?: int<1, 10>|null,
     *     Owner?: string|null,
     *     DisplayName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
