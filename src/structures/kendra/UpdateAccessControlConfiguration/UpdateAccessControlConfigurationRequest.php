<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateAccessControlConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexId
 * @property string $Id
 * @property string|null $Name
 * @property string|null $Description
 * @property list<Shapes\Principal>|null $AccessControlList
 * @property list<Shapes\HierarchicalPrincipal>|null $HierarchicalAccessControlList
 */
class UpdateAccessControlConfigurationRequest extends Request
{
    /**
     * @param array{
     *     IndexId: string,
     *     Id: string,
     *     Name?: string|null,
     *     Description?: string|null,
     *     AccessControlList?: list<Shapes\Principal>|null,
     *     HierarchicalAccessControlList?: list<Shapes\HierarchicalPrincipal>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
