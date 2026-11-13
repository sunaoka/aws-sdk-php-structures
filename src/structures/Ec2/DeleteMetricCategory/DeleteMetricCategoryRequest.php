<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteMetricCategory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MetricCategoryId
 * @property bool|null $DryRun
 */
class DeleteMetricCategoryRequest extends Request
{
    /**
     * @param array{
     *     MetricCategoryId: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
