<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\ListDirectQueryDataSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RoleArn
 */
class CloudWatchDirectQueryDataSource extends Shape
{
    /**
     * @param array{RoleArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
