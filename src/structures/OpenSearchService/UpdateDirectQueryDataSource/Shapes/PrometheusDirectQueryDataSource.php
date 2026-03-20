<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpdateDirectQueryDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RoleArn
 * @property string $WorkspaceArn
 */
class PrometheusDirectQueryDataSource extends Shape
{
    /**
     * @param array{
     *     RoleArn: string,
     *     WorkspaceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
