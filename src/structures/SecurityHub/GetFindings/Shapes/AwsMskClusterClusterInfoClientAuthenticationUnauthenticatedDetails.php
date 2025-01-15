<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Enabled
 */
class AwsMskClusterClusterInfoClientAuthenticationUnauthenticatedDetails extends Shape
{
    /**
     * @param array{Enabled?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
