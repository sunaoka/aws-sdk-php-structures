<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\CreateRecoveryGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $Cells
 * @property string $RecoveryGroupName
 * @property array<string, string>|null $Tags
 */
class CreateRecoveryGroupRequest extends Request
{
    /**
     * @param array{
     *     Cells?: list<string>|null,
     *     RecoveryGroupName: string,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
