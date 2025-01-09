<?php

namespace Sunaoka\Aws\Structures\XRay\GetTraceSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property double $Coverage
 * @property bool $Remote
 */
class ResponseTimeRootCauseEntity extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Coverage?: double,
     *     Remote?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
