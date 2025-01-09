<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetResponseHeadersPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property double $SamplingRate
 */
class ResponseHeadersPolicyServerTimingHeadersConfig extends Shape
{
    /**
     * @param array{
     *     Enabled: bool,
     *     SamplingRate?: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
