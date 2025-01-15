<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateMlflowTrackingServer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrackingServerName
 * @property string $ArtifactStoreUri
 * @property 'Small'|'Medium'|'Large'|null $TrackingServerSize
 * @property string|null $MlflowVersion
 * @property string $RoleArn
 * @property bool|null $AutomaticModelRegistration
 * @property string|null $WeeklyMaintenanceWindowStart
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateMlflowTrackingServerRequest extends Request
{
    /**
     * @param array{
     *     TrackingServerName: string,
     *     ArtifactStoreUri: string,
     *     TrackingServerSize?: 'Small'|'Medium'|'Large'|null,
     *     MlflowVersion?: string|null,
     *     RoleArn: string,
     *     AutomaticModelRegistration?: bool|null,
     *     WeeklyMaintenanceWindowStart?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
