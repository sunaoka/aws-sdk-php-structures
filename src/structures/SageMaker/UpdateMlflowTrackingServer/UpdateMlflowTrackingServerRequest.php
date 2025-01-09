<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateMlflowTrackingServer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrackingServerName
 * @property string $ArtifactStoreUri
 * @property 'Small'|'Medium'|'Large' $TrackingServerSize
 * @property bool $AutomaticModelRegistration
 * @property string $WeeklyMaintenanceWindowStart
 */
class UpdateMlflowTrackingServerRequest extends Request
{
    /**
     * @param array{
     *     TrackingServerName: string,
     *     ArtifactStoreUri?: string,
     *     TrackingServerSize?: 'Small'|'Medium'|'Large',
     *     AutomaticModelRegistration?: bool,
     *     WeeklyMaintenanceWindowStart?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
