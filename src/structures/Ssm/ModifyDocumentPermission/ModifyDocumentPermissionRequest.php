<?php

namespace Sunaoka\Aws\Structures\Ssm\ModifyDocumentPermission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'Share' $PermissionType
 * @property list<string>|null $AccountIdsToAdd
 * @property list<string>|null $AccountIdsToRemove
 * @property string|null $SharedDocumentVersion
 */
class ModifyDocumentPermissionRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     PermissionType: 'Share',
     *     AccountIdsToAdd?: list<string>|null,
     *     AccountIdsToRemove?: list<string>|null,
     *     SharedDocumentVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
