<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Reference
 * @property list<string> $TargetViolationReasons
 */
class PartialMatch extends Shape
{
    /**
     * @param array{
     *     Reference?: string,
     *     TargetViolationReasons?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
