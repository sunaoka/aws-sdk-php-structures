<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\UpdateEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $applyDuringMaintenanceWindow
 * @property int|null $desiredCapacity
 * @property string|null $engineVersion
 * @property string $environmentId
 * @property bool|null $forceUpdate
 * @property string|null $instanceType
 * @property string|null $preferredMaintenanceWindow
 */
class UpdateEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     applyDuringMaintenanceWindow?: bool|null,
     *     desiredCapacity?: int|null,
     *     engineVersion?: string|null,
     *     environmentId: string,
     *     forceUpdate?: bool|null,
     *     instanceType?: string|null,
     *     preferredMaintenanceWindow?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
