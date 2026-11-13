<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyMetricCategory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MetricCategoryId
 * @property list<string> $Metrics
 * @property bool|null $DryRun
 */
class ModifyMetricCategoryRequest extends Request
{
    /**
     * @param array{
     *     MetricCategoryId: string,
     *     Metrics: list<string>,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
