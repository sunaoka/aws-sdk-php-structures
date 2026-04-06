<?php

namespace Sunaoka\Aws\Structures\LaunchWizard;

class LaunchWizardClient extends \Aws\LaunchWizard\LaunchWizardClient
{
    use CreateDeployment\CreateDeploymentTrait;
    use DeleteDeployment\DeleteDeploymentTrait;
    use GetDeployment\GetDeploymentTrait;
    use GetDeploymentPatternVersion\GetDeploymentPatternVersionTrait;
    use GetWorkload\GetWorkloadTrait;
    use GetWorkloadDeploymentPattern\GetWorkloadDeploymentPatternTrait;
    use ListDeploymentEvents\ListDeploymentEventsTrait;
    use ListDeploymentPatternVersions\ListDeploymentPatternVersionsTrait;
    use ListDeployments\ListDeploymentsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListWorkloadDeploymentPatterns\ListWorkloadDeploymentPatternsTrait;
    use ListWorkloads\ListWorkloadsTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateDeployment\UpdateDeploymentTrait;
}
