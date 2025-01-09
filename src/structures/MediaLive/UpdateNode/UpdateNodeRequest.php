<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateNode;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 * @property string $Name
 * @property string $NodeId
 * @property 'BACKUP'|'ACTIVE' $Role
 */
class UpdateNodeRequest extends Request
{
    /**
     * @param array{
     *     ClusterId: string,
     *     Name?: string,
     *     NodeId: string,
     *     Role?: 'BACKUP'|'ACTIVE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
