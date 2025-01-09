<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property list<PossibleRemediationAction> $Actions
 */
class PossibleRemediationActions extends Shape
{
    /**
     * @param array{
     *     Description?: string,
     *     Actions?: list<PossibleRemediationAction>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
