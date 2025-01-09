<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property list<RemediationActionWithOrder> $OrderedRemediationActions
 * @property bool $IsDefaultAction
 */
class PossibleRemediationAction extends Shape
{
    /**
     * @param array{
     *     Description?: string,
     *     OrderedRemediationActions: list<RemediationActionWithOrder>,
     *     IsDefaultAction?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
