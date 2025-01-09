<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateNodeRegistrationScript;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 * @property string $Id
 * @property string $Name
 * @property list<Shapes\NodeInterfaceMapping> $NodeInterfaceMappings
 * @property string $RequestId
 * @property 'BACKUP'|'ACTIVE' $Role
 */
class CreateNodeRegistrationScriptRequest extends Request
{
    /**
     * @param array{
     *     ClusterId: string,
     *     Id?: string,
     *     Name?: string,
     *     NodeInterfaceMappings?: list<Shapes\NodeInterfaceMapping>,
     *     RequestId?: string,
     *     Role?: 'BACKUP'|'ACTIVE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
