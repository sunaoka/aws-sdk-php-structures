<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\CreateCell;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CellName
 * @property list<string> $Cells
 * @property array<string, string> $Tags
 */
class CreateCellRequest extends Request
{
    /**
     * @param array{
     *     CellName: string,
     *     Cells?: list<string>,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
