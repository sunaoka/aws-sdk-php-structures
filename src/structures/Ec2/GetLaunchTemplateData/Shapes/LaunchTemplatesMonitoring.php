<?php

namespace Sunaoka\Aws\Structures\Ec2\GetLaunchTemplateData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Enabled
 * @property list<string>|null $MetricCategoryIds
 */
class LaunchTemplatesMonitoring extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool|null,
     *     MetricCategoryIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
