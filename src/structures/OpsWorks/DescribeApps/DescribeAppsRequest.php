<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeApps;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackId
 * @property list<string> $AppIds
 */
class DescribeAppsRequest extends Request
{
    /**
     * @param array{
     *     StackId?: string,
     *     AppIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
