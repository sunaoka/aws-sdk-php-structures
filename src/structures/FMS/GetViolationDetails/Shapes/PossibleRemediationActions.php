<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property list<PossibleRemediationAction>|null $Actions
 */
class PossibleRemediationActions extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     Actions?: list<PossibleRemediationAction>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
