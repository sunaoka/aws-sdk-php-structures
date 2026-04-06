<?php

namespace Sunaoka\Aws\Structures\SecurityIR\CreateMembership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Triage' $featureName
 * @property bool $isEnabled
 */
class OptInFeature extends Shape
{
    /**
     * @param array{
     *     featureName: 'Triage',
     *     isEnabled: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
