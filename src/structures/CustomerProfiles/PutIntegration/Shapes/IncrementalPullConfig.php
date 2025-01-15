<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\PutIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DatetimeTypeFieldName
 */
class IncrementalPullConfig extends Shape
{
    /**
     * @param array{DatetimeTypeFieldName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
