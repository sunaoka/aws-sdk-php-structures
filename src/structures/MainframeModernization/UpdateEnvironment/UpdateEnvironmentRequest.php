<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\UpdateEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $applyDuringMaintenanceWindow
 * @property int $desiredCapacity
 * @property string $engineVersion
 * @property string $environmentId
 * @property bool $forceUpdate
 * @property string $instanceType
 * @property string $preferredMaintenanceWindow
 */
class UpdateEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     applyDuringMaintenanceWindow?: bool,
     *     desiredCapacity?: int,
     *     engineVersion?: string,
     *     environmentId: string,
     *     forceUpdate?: bool,
     *     instanceType?: string,
     *     preferredMaintenanceWindow?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
