<?php

namespace Sunaoka\Aws\Structures\XRay\GetTraceSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property double|null $Coverage
 * @property bool|null $Remote
 */
class ResponseTimeRootCauseEntity extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Coverage?: double|null,
     *     Remote?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
