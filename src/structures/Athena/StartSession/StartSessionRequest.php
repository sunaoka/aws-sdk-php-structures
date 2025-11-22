<?php

namespace Sunaoka\Aws\Structures\Athena\StartSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property string $WorkGroup
 * @property Shapes\EngineConfiguration $EngineConfiguration
 * @property string|null $ExecutionRole
 * @property Shapes\MonitoringConfiguration|null $MonitoringConfiguration
 * @property string|null $NotebookVersion
 * @property int<1, 480>|null $SessionIdleTimeoutInMinutes
 * @property string|null $ClientRequestToken
 * @property list<Shapes\Tag>|null $Tags
 * @property bool|null $CopyWorkGroupTags
 */
class StartSessionRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     WorkGroup: string,
     *     EngineConfiguration: Shapes\EngineConfiguration,
     *     ExecutionRole?: string|null,
     *     MonitoringConfiguration?: Shapes\MonitoringConfiguration|null,
     *     NotebookVersion?: string|null,
     *     SessionIdleTimeoutInMinutes?: int<1, 480>|null,
     *     ClientRequestToken?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     CopyWorkGroupTags?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
