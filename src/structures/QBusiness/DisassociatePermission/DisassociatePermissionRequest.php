<?php

namespace Sunaoka\Aws\Structures\QBusiness\DisassociatePermission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $statementId
 */
class DisassociatePermissionRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     statementId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
