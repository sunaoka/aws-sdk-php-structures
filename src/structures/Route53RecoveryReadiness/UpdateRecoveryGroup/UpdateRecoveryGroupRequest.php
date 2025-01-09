<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\UpdateRecoveryGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $Cells
 * @property string $RecoveryGroupName
 */
class UpdateRecoveryGroupRequest extends Request
{
    /**
     * @param array{
     *     Cells: list<string>,
     *     RecoveryGroupName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
