<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateNodeRegistrationScript;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 * @property string|null $Id
 * @property string|null $Name
 * @property list<Shapes\NodeInterfaceMapping>|null $NodeInterfaceMappings
 * @property string|null $RequestId
 * @property 'BACKUP'|'ACTIVE'|null $Role
 */
class CreateNodeRegistrationScriptRequest extends Request
{
    /**
     * @param array{
     *     ClusterId: string,
     *     Id?: string|null,
     *     Name?: string|null,
     *     NodeInterfaceMappings?: list<Shapes\NodeInterfaceMapping>|null,
     *     RequestId?: string|null,
     *     Role?: 'BACKUP'|'ACTIVE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
