<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Reference
 * @property list<string>|null $TargetViolationReasons
 */
class PartialMatch extends Shape
{
    /**
     * @param array{
     *     Reference?: string|null,
     *     TargetViolationReasons?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
