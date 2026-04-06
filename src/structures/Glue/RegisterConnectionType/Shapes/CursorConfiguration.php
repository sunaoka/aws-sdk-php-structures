<?php

namespace Sunaoka\Aws\Structures\Glue\RegisterConnectionType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExtractedParameter $NextPage
 * @property ExtractedParameter|null $LimitParameter
 */
class CursorConfiguration extends Shape
{
    /**
     * @param array{
     *     NextPage: ExtractedParameter,
     *     LimitParameter?: ExtractedParameter|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
