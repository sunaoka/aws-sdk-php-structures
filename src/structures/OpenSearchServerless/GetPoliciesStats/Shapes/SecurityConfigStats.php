<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\GetPoliciesStats\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $SamlConfigCount
 */
class SecurityConfigStats extends Shape
{
    /**
     * @param array{SamlConfigCount?: int|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
