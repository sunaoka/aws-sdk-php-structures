<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateIntegrationWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DatetimeTypeFieldName
 */
class IncrementalPullConfig extends Shape
{
    /**
     * @param array{DatetimeTypeFieldName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
