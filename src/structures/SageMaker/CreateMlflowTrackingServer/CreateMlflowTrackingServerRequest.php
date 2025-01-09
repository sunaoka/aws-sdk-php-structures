<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateMlflowTrackingServer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrackingServerName
 * @property string $ArtifactStoreUri
 * @property 'Small'|'Medium'|'Large' $TrackingServerSize
 * @property string $MlflowVersion
 * @property string $RoleArn
 * @property bool $AutomaticModelRegistration
 * @property string $WeeklyMaintenanceWindowStart
 * @property list<Shapes\Tag> $Tags
 */
class CreateMlflowTrackingServerRequest extends Request
{
    /**
     * @param array{
     *     TrackingServerName: string,
     *     ArtifactStoreUri: string,
     *     TrackingServerSize?: 'Small'|'Medium'|'Large',
     *     MlflowVersion?: string,
     *     RoleArn: string,
     *     AutomaticModelRegistration?: bool,
     *     WeeklyMaintenanceWindowStart?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
