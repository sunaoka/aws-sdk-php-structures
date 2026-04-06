<?php

namespace Sunaoka\Aws\Structures\WellArchitected\CreateWorkload;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkloadName
 * @property string $Description
 * @property 'PRODUCTION'|'PREPRODUCTION' $Environment
 * @property list<string>|null $AccountIds
 * @property list<string>|null $AwsRegions
 * @property list<string>|null $NonAwsRegions
 * @property list<string>|null $PillarPriorities
 * @property string|null $ArchitecturalDesign
 * @property string|null $ReviewOwner
 * @property string|null $IndustryType
 * @property string|null $Industry
 * @property list<string> $Lenses
 * @property string|null $Notes
 * @property string $ClientRequestToken
 * @property array<string, string>|null $Tags
 * @property Shapes\WorkloadDiscoveryConfig|null $DiscoveryConfig
 * @property list<string>|null $Applications
 * @property list<string>|null $ProfileArns
 * @property list<string>|null $ReviewTemplateArns
 * @property Shapes\WorkloadJiraConfigurationInput|null $JiraConfiguration
 */
class CreateWorkloadRequest extends Request
{
    /**
     * @param array{
     *     WorkloadName: string,
     *     Description: string,
     *     Environment: 'PRODUCTION'|'PREPRODUCTION',
     *     AccountIds?: list<string>|null,
     *     AwsRegions?: list<string>|null,
     *     NonAwsRegions?: list<string>|null,
     *     PillarPriorities?: list<string>|null,
     *     ArchitecturalDesign?: string|null,
     *     ReviewOwner?: string|null,
     *     IndustryType?: string|null,
     *     Industry?: string|null,
     *     Lenses: list<string>,
     *     Notes?: string|null,
     *     ClientRequestToken: string,
     *     Tags?: array<string, string>|null,
     *     DiscoveryConfig?: Shapes\WorkloadDiscoveryConfig|null,
     *     Applications?: list<string>|null,
     *     ProfileArns?: list<string>|null,
     *     ReviewTemplateArns?: list<string>|null,
     *     JiraConfiguration?: Shapes\WorkloadJiraConfigurationInput|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
