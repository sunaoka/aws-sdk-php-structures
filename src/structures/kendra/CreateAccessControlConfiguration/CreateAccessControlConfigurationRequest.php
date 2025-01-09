<?php

namespace Sunaoka\Aws\Structures\kendra\CreateAccessControlConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexId
 * @property string $Name
 * @property string $Description
 * @property list<Shapes\Principal> $AccessControlList
 * @property list<Shapes\HierarchicalPrincipal> $HierarchicalAccessControlList
 * @property string $ClientToken
 */
class CreateAccessControlConfigurationRequest extends Request
{
    /**
     * @param array{
     *     IndexId: string,
     *     Name: string,
     *     Description?: string,
     *     AccessControlList?: list<Shapes\Principal>,
     *     HierarchicalAccessControlList?: list<Shapes\HierarchicalPrincipal>,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
