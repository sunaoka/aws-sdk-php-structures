<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property list<RemediationActionWithOrder> $OrderedRemediationActions
 * @property bool|null $IsDefaultAction
 */
class PossibleRemediationAction extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     OrderedRemediationActions: list<RemediationActionWithOrder>,
     *     IsDefaultAction?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
