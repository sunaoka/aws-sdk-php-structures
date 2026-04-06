<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateMlflowTrackingServer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrackingServerName
 * @property string|null $ArtifactStoreUri
 * @property 'Small'|'Medium'|'Large'|null $TrackingServerSize
 * @property bool|null $AutomaticModelRegistration
 * @property string|null $WeeklyMaintenanceWindowStart
 */
class UpdateMlflowTrackingServerRequest extends Request
{
    /**
     * @param array{
     *     TrackingServerName: string,
     *     ArtifactStoreUri?: string|null,
     *     TrackingServerSize?: 'Small'|'Medium'|'Large'|null,
     *     AutomaticModelRegistration?: bool|null,
     *     WeeklyMaintenanceWindowStart?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
