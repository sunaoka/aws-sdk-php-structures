<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\GetCell;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CellName
 */
class GetCellRequest extends Request
{
    /**
     * @param array{CellName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
