<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\ListInstalledComponents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $componentName
 * @property string|null $componentVersion
 * @property 'NEW'|'INSTALLED'|'STARTING'|'RUNNING'|'STOPPING'|'ERRORED'|'BROKEN'|'FINISHED'|null $lifecycleState
 * @property string|null $lifecycleStateDetails
 * @property bool|null $isRoot
 * @property \Aws\Api\DateTimeResult|null $lastStatusChangeTimestamp
 * @property \Aws\Api\DateTimeResult|null $lastReportedTimestamp
 * @property string|null $lastInstallationSource
 * @property list<string>|null $lifecycleStatusCodes
 */
class InstalledComponent extends Shape
{
    /**
     * @param array{
     *     componentName?: string|null,
     *     componentVersion?: string|null,
     *     lifecycleState?: 'NEW'|'INSTALLED'|'STARTING'|'RUNNING'|'STOPPING'|'ERRORED'|'BROKEN'|'FINISHED'|null,
     *     lifecycleStateDetails?: string|null,
     *     isRoot?: bool|null,
     *     lastStatusChangeTimestamp?: \Aws\Api\DateTimeResult|null,
     *     lastReportedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     lastInstallationSource?: string|null,
     *     lifecycleStatusCodes?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
