<?php

namespace Sunaoka\Aws\Structures\Glue\RegisterConnectionType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExtractedParameter $OffsetParameter
 * @property ExtractedParameter $LimitParameter
 */
class OffsetConfiguration extends Shape
{
    /**
     * @param array{
     *     OffsetParameter: ExtractedParameter,
     *     LimitParameter: ExtractedParameter
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
