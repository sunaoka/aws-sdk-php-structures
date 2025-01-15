<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeComputeEnvironments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $launchTemplateId
 * @property string|null $launchTemplateName
 * @property string|null $version
 * @property list<string>|null $targetInstanceTypes
 */
class LaunchTemplateSpecificationOverride extends Shape
{
    /**
     * @param array{
     *     launchTemplateId?: string|null,
     *     launchTemplateName?: string|null,
     *     version?: string|null,
     *     targetInstanceTypes?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
