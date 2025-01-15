<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\CreateCell;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CellName
 * @property list<string>|null $Cells
 * @property array<string, string>|null $Tags
 */
class CreateCellRequest extends Request
{
    /**
     * @param array{
     *     CellName: string,
     *     Cells?: list<string>|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
