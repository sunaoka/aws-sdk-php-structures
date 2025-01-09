<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\UpdateCell;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CellName
 * @property list<string> $Cells
 */
class UpdateCellRequest extends Request
{
    /**
     * @param array{
     *     CellName: string,
     *     Cells: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
