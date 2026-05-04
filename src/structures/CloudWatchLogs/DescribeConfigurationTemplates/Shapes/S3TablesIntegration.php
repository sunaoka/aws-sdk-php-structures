<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeConfigurationTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $datasourceName
 * @property string|null $datasourceType
 */
class S3TablesIntegration extends Shape
{
    /**
     * @param array{
     *     datasourceName?: string|null,
     *     datasourceType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
