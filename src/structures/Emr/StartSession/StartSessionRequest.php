<?php

namespace Sunaoka\Aws\Structures\Emr\StartSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Name
 * @property string $ClusterId
 * @property string|null $ExecutionRoleArn
 * @property list<Shapes\Configuration>|null $EngineConfigurations
 * @property Shapes\SessionMonitoringConfiguration|null $MonitoringConfiguration
 * @property int|null $SessionIdleTimeoutInMinutes
 * @property string|null $ClientRequestToken
 * @property list<Shapes\Tag>|null $Tags
 */
class StartSessionRequest extends Request
{
    /**
     * @param array{
     *     Name?: string|null,
     *     ClusterId: string,
     *     ExecutionRoleArn?: string|null,
     *     EngineConfigurations?: list<Shapes\Configuration>|null,
     *     MonitoringConfiguration?: Shapes\SessionMonitoringConfiguration|null,
     *     SessionIdleTimeoutInMinutes?: int|null,
     *     ClientRequestToken?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
