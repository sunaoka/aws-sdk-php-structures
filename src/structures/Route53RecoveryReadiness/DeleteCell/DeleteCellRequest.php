<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\DeleteCell;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CellName
 */
class DeleteCellRequest extends Request
{
    /**
     * @param array{CellName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
