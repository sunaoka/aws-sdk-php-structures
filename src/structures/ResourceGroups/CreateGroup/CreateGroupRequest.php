<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\CreateGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Description
 * @property Shapes\ResourceQuery $ResourceQuery
 * @property array<string, string> $Tags
 * @property list<Shapes\GroupConfigurationItem> $Configuration
 * @property int<1, 10> $Criticality
 * @property string $Owner
 * @property string $DisplayName
 */
class CreateGroupRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     ResourceQuery?: Shapes\ResourceQuery,
     *     Tags?: array<string, string>,
     *     Configuration?: list<Shapes\GroupConfigurationItem>,
     *     Criticality?: int<1, 10>,
     *     Owner?: string,
     *     DisplayName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
