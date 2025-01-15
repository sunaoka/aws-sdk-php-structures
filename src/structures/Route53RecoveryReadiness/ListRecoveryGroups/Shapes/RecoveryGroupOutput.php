<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\ListRecoveryGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Cells
 * @property string $RecoveryGroupArn
 * @property string $RecoveryGroupName
 * @property array<string, string>|null $Tags
 */
class RecoveryGroupOutput extends Shape
{
    /**
     * @param array{
     *     Cells: list<string>,
     *     RecoveryGroupArn: string,
     *     RecoveryGroupName: string,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
