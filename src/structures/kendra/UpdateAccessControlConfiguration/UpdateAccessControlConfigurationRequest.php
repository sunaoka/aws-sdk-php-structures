<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateAccessControlConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexId
 * @property string $Id
 * @property string $Name
 * @property string $Description
 * @property list<Shapes\Principal> $AccessControlList
 * @property list<Shapes\HierarchicalPrincipal> $HierarchicalAccessControlList
 */
class UpdateAccessControlConfigurationRequest extends Request
{
    /**
     * @param array{
     *     IndexId: string,
     *     Id: string,
     *     Name?: string,
     *     Description?: string,
     *     AccessControlList?: list<Shapes\Principal>,
     *     HierarchicalAccessControlList?: list<Shapes\HierarchicalPrincipal>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
