<?php

namespace Sunaoka\Aws\Structures\WellArchitected\CreateWorkload;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkloadName
 * @property string $Description
 * @property 'PRODUCTION'|'PREPRODUCTION' $Environment
 * @property list<string> $AccountIds
 * @property list<string> $AwsRegions
 * @property list<string> $NonAwsRegions
 * @property list<string> $PillarPriorities
 * @property string $ArchitecturalDesign
 * @property string $ReviewOwner
 * @property string $IndustryType
 * @property string $Industry
 * @property list<string> $Lenses
 * @property string $Notes
 * @property string $ClientRequestToken
 * @property array<string, string> $Tags
 * @property Shapes\WorkloadDiscoveryConfig $DiscoveryConfig
 * @property list<string> $Applications
 * @property list<string> $ProfileArns
 * @property list<string> $ReviewTemplateArns
 * @property Shapes\WorkloadJiraConfigurationInput $JiraConfiguration
 */
class CreateWorkloadRequest extends Request
{
    /**
     * @param array{
     *     WorkloadName: string,
     *     Description: string,
     *     Environment: 'PRODUCTION'|'PREPRODUCTION',
     *     AccountIds?: list<string>,
     *     AwsRegions?: list<string>,
     *     NonAwsRegions?: list<string>,
     *     PillarPriorities?: list<string>,
     *     ArchitecturalDesign?: string,
     *     ReviewOwner?: string,
     *     IndustryType?: string,
     *     Industry?: string,
     *     Lenses: list<string>,
     *     Notes?: string,
     *     ClientRequestToken: string,
     *     Tags?: array<string, string>,
     *     DiscoveryConfig?: Shapes\WorkloadDiscoveryConfig,
     *     Applications?: list<string>,
     *     ProfileArns?: list<string>,
     *     ReviewTemplateArns?: list<string>,
     *     JiraConfiguration?: Shapes\WorkloadJiraConfigurationInput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
