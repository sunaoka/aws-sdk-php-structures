<?php

namespace Sunaoka\Aws\Structures\XRay\GetTraceSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ResponseTimeRootCauseService>|null $Services
 * @property bool|null $ClientImpacting
 */
class ResponseTimeRootCause extends Shape
{
    /**
     * @param array{
     *     Services?: list<ResponseTimeRootCauseService>|null,
     *     ClientImpacting?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
