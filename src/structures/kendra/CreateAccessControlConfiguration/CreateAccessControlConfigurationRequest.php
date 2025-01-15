<?php

namespace Sunaoka\Aws\Structures\kendra\CreateAccessControlConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexId
 * @property string $Name
 * @property string|null $Description
 * @property list<Shapes\Principal>|null $AccessControlList
 * @property list<Shapes\HierarchicalPrincipal>|null $HierarchicalAccessControlList
 * @property string|null $ClientToken
 */
class CreateAccessControlConfigurationRequest extends Request
{
    /**
     * @param array{
     *     IndexId: string,
     *     Name: string,
     *     Description?: string|null,
     *     AccessControlList?: list<Shapes\Principal>|null,
     *     HierarchicalAccessControlList?: list<Shapes\HierarchicalPrincipal>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
