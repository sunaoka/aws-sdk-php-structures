<?php

namespace Sunaoka\Aws\Structures\QBusiness\AssociatePermission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $statementId
 * @property list<string> $actions
 * @property list<Shapes\PermissionCondition>|null $conditions
 * @property string $principal
 */
class AssociatePermissionRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     statementId: string,
     *     actions: list<string>,
     *     conditions?: list<Shapes\PermissionCondition>|null,
     *     principal: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
