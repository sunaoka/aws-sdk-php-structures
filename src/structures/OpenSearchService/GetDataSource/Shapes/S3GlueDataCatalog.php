<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\GetDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RoleArn
 */
class S3GlueDataCatalog extends Shape
{
    /**
     * @param array{RoleArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
