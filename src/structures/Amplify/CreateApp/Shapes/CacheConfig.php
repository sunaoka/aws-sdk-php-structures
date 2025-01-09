<?php

namespace Sunaoka\Aws\Structures\Amplify\CreateApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AMPLIFY_MANAGED'|'AMPLIFY_MANAGED_NO_COOKIES' $type
 */
class CacheConfig extends Shape
{
    /**
     * @param array{type: 'AMPLIFY_MANAGED'|'AMPLIFY_MANAGED_NO_COOKIES'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
