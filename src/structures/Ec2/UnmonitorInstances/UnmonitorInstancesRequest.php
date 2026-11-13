<?php

namespace Sunaoka\Aws\Structures\Ec2\UnmonitorInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $InstanceIds
 * @property list<string>|null $MetricCategoryIds
 * @property bool|null $DryRun
 */
class UnmonitorInstancesRequest extends Request
{
    /**
     * @param array{
     *     InstanceIds: list<string>,
     *     MetricCategoryIds?: list<string>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
