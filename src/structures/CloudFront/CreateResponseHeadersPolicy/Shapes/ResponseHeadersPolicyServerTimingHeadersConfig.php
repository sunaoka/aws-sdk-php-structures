<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateResponseHeadersPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property double|null $SamplingRate
 */
class ResponseHeadersPolicyServerTimingHeadersConfig extends Shape
{
    /**
     * @param array{
     *     Enabled: bool,
     *     SamplingRate?: double|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
