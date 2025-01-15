<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\ListCollectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<IPAddressBasedRemoteInfo>|null $ipAddressBasedRemoteInfoList
 * @property list<PipelineInfo>|null $pipelineInfoList
 * @property RemoteSourceCodeAnalysisServerInfo|null $remoteSourceCodeAnalysisServerInfo
 * @property list<VcenterBasedRemoteInfo>|null $vcenterBasedRemoteInfoList
 * @property list<VersionControlInfo>|null $versionControlInfoList
 */
class ConfigurationSummary extends Shape
{
    /**
     * @param array{
     *     ipAddressBasedRemoteInfoList?: list<IPAddressBasedRemoteInfo>|null,
     *     pipelineInfoList?: list<PipelineInfo>|null,
     *     remoteSourceCodeAnalysisServerInfo?: RemoteSourceCodeAnalysisServerInfo|null,
     *     vcenterBasedRemoteInfoList?: list<VcenterBasedRemoteInfo>|null,
     *     versionControlInfoList?: list<VersionControlInfo>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
