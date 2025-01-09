<?php

namespace Sunaoka\Aws\Structures\Batch\UpdateComputeEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $launchTemplateId
 * @property string $launchTemplateName
 * @property string $version
 * @property list<LaunchTemplateSpecificationOverride> $overrides
 */
class LaunchTemplateSpecification extends Shape
{
    /**
     * @param array{
     *     launchTemplateId?: string,
     *     launchTemplateName?: string,
     *     version?: string,
     *     overrides?: list<LaunchTemplateSpecificationOverride>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
