<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\ListCells\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CellArn
 * @property string $CellName
 * @property list<string> $Cells
 * @property list<string> $ParentReadinessScopes
 * @property array<string, string>|null $Tags
 */
class CellOutput extends Shape
{
    /**
     * @param array{
     *     CellArn: string,
     *     CellName: string,
     *     Cells: list<string>,
     *     ParentReadinessScopes: list<string>,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
