<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateNode;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 * @property string|null $Name
 * @property string $NodeId
 * @property 'BACKUP'|'ACTIVE'|null $Role
 * @property list<Shapes\SdiSourceMappingUpdateRequest>|null $SdiSourceMappings
 */
class UpdateNodeRequest extends Request
{
    /**
     * @param array{
     *     ClusterId: string,
     *     Name?: string|null,
     *     NodeId: string,
     *     Role?: 'BACKUP'|'ACTIVE'|null,
     *     SdiSourceMappings?: list<Shapes\SdiSourceMappingUpdateRequest>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
