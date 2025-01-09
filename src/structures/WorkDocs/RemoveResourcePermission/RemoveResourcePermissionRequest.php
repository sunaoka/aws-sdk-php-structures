<?php

namespace Sunaoka\Aws\Structures\WorkDocs\RemoveResourcePermission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AuthenticationToken
 * @property string $ResourceId
 * @property string $PrincipalId
 * @property 'USER'|'GROUP'|'INVITE'|'ANONYMOUS'|'ORGANIZATION' $PrincipalType
 */
class RemoveResourcePermissionRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string,
     *     ResourceId: string,
     *     PrincipalId: string,
     *     PrincipalType?: 'USER'|'GROUP'|'INVITE'|'ANONYMOUS'|'ORGANIZATION'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
