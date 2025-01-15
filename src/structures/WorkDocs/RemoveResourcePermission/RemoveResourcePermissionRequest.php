<?php

namespace Sunaoka\Aws\Structures\WorkDocs\RemoveResourcePermission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AuthenticationToken
 * @property string $ResourceId
 * @property string $PrincipalId
 * @property 'USER'|'GROUP'|'INVITE'|'ANONYMOUS'|'ORGANIZATION'|null $PrincipalType
 */
class RemoveResourcePermissionRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string|null,
     *     ResourceId: string,
     *     PrincipalId: string,
     *     PrincipalType?: 'USER'|'GROUP'|'INVITE'|'ANONYMOUS'|'ORGANIZATION'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
