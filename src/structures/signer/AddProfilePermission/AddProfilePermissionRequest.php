<?php

namespace Sunaoka\Aws\Structures\signer\AddProfilePermission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $profileName
 * @property string|null $profileVersion
 * @property string $action
 * @property string $principal
 * @property string|null $revisionId
 * @property string $statementId
 */
class AddProfilePermissionRequest extends Request
{
    /**
     * @param array{
     *     profileName: string,
     *     profileVersion?: string|null,
     *     action: string,
     *     principal: string,
     *     revisionId?: string|null,
     *     statementId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
