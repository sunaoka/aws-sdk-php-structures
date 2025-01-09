<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DeleteOutboundConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $SkipUnavailable
 */
class CrossClusterSearchConnectionProperties extends Shape
{
    /**
     * @param array{SkipUnavailable?: 'ENABLED'|'DISABLED'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
