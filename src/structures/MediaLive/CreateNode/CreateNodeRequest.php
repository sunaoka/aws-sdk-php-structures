<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateNode;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 * @property string|null $Name
 * @property list<Shapes\NodeInterfaceMappingCreateRequest>|null $NodeInterfaceMappings
 * @property string|null $RequestId
 * @property 'BACKUP'|'ACTIVE'|null $Role
 * @property array<string, string>|null $Tags
 */
class CreateNodeRequest extends Request
{
    /**
     * @param array{
     *     ClusterId: string,
     *     Name?: string|null,
     *     NodeInterfaceMappings?: list<Shapes\NodeInterfaceMappingCreateRequest>|null,
     *     RequestId?: string|null,
     *     Role?: 'BACKUP'|'ACTIVE'|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
