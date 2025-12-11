<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\AssociateSourceToS3TableIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $type
 */
class DataSource extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     type?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
