<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\CreateRecoveryGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $Cells
 * @property string $RecoveryGroupName
 * @property array<string, string> $Tags
 */
class CreateRecoveryGroupRequest extends Request
{
    /**
     * @param array{
     *     Cells?: list<string>,
     *     RecoveryGroupName: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
