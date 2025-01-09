<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DescribeWorkspace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'CREATION_FAILED' $statusCode
 */
class WorkspaceStatus extends Shape
{
    /**
     * @param array{statusCode: 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'CREATION_FAILED'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
