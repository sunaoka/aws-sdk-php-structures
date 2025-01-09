<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\ListCollectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<IPAddressBasedRemoteInfo> $ipAddressBasedRemoteInfoList
 * @property list<PipelineInfo> $pipelineInfoList
 * @property RemoteSourceCodeAnalysisServerInfo $remoteSourceCodeAnalysisServerInfo
 * @property list<VcenterBasedRemoteInfo> $vcenterBasedRemoteInfoList
 * @property list<VersionControlInfo> $versionControlInfoList
 */
class ConfigurationSummary extends Shape
{
    /**
     * @param array{
     *     ipAddressBasedRemoteInfoList?: list<IPAddressBasedRemoteInfo>,
     *     pipelineInfoList?: list<PipelineInfo>,
     *     remoteSourceCodeAnalysisServerInfo?: RemoteSourceCodeAnalysisServerInfo,
     *     vcenterBasedRemoteInfoList?: list<VcenterBasedRemoteInfo>,
     *     versionControlInfoList?: list<VersionControlInfo>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
