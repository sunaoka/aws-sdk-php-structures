<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateNode;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 * @property string $Name
 * @property list<Shapes\NodeInterfaceMappingCreateRequest> $NodeInterfaceMappings
 * @property string $RequestId
 * @property 'BACKUP'|'ACTIVE' $Role
 * @property array<string, string> $Tags
 */
class CreateNodeRequest extends Request
{
    /**
     * @param array{
     *     ClusterId: string,
     *     Name?: string,
     *     NodeInterfaceMappings?: list<Shapes\NodeInterfaceMappingCreateRequest>,
     *     RequestId?: string,
     *     Role?: 'BACKUP'|'ACTIVE',
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
