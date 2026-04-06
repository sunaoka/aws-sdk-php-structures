<?php

namespace Sunaoka\Aws\Structures\Batch\UpdateComputeEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $launchTemplateId
 * @property string|null $launchTemplateName
 * @property string|null $version
 * @property list<LaunchTemplateSpecificationOverride>|null $overrides
 * @property 'EKS_BOOTSTRAP_SH'|'EKS_NODEADM'|null $userdataType
 */
class LaunchTemplateSpecification extends Shape
{
    /**
     * @param array{
     *     launchTemplateId?: string|null,
     *     launchTemplateName?: string|null,
     *     version?: string|null,
     *     overrides?: list<LaunchTemplateSpecificationOverride>|null,
     *     userdataType?: 'EKS_BOOTSTRAP_SH'|'EKS_NODEADM'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
