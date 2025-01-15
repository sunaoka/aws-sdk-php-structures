<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeApps;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $StackId
 * @property list<string>|null $AppIds
 */
class DescribeAppsRequest extends Request
{
    /**
     * @param array{
     *     StackId?: string|null,
     *     AppIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
