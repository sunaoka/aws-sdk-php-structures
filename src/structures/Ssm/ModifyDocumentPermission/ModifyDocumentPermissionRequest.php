<?php

namespace Sunaoka\Aws\Structures\Ssm\ModifyDocumentPermission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'Share' $PermissionType
 * @property list<string> $AccountIdsToAdd
 * @property list<string> $AccountIdsToRemove
 * @property string $SharedDocumentVersion
 */
class ModifyDocumentPermissionRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     PermissionType: 'Share',
     *     AccountIdsToAdd?: list<string>,
     *     AccountIdsToRemove?: list<string>,
     *     SharedDocumentVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
