<?php

namespace Sunaoka\Aws\Structures\RAM\ReplacePermissionAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $fromPermissionArn
 * @property int $fromPermissionVersion
 * @property string $toPermissionArn
 * @property string $clientToken
 */
class ReplacePermissionAssociationsRequest extends Request
{
    /**
     * @param array{
     *     fromPermissionArn: string,
     *     fromPermissionVersion?: int,
     *     toPermissionArn: string,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
