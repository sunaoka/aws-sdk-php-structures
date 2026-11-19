<?php

namespace Sunaoka\Aws\Structures\AbuseSignal\CreateAbuseReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Document|null $xarf
 */
class ReportData extends Shape
{
    /**
     * @param array{xarf?: Document|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
