<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\ListInstalledComponents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $componentName
 * @property string $componentVersion
 * @property 'NEW'|'INSTALLED'|'STARTING'|'RUNNING'|'STOPPING'|'ERRORED'|'BROKEN'|'FINISHED' $lifecycleState
 * @property string $lifecycleStateDetails
 * @property bool $isRoot
 * @property \Aws\Api\DateTimeResult $lastStatusChangeTimestamp
 * @property \Aws\Api\DateTimeResult $lastReportedTimestamp
 * @property string $lastInstallationSource
 * @property list<string> $lifecycleStatusCodes
 */
class InstalledComponent extends Shape
{
    /**
     * @param array{
     *     componentName?: string,
     *     componentVersion?: string,
     *     lifecycleState?: 'NEW'|'INSTALLED'|'STARTING'|'RUNNING'|'STOPPING'|'ERRORED'|'BROKEN'|'FINISHED',
     *     lifecycleStateDetails?: string,
     *     isRoot?: bool,
     *     lastStatusChangeTimestamp?: \Aws\Api\DateTimeResult,
     *     lastReportedTimestamp?: \Aws\Api\DateTimeResult,
     *     lastInstallationSource?: string,
     *     lifecycleStatusCodes?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
