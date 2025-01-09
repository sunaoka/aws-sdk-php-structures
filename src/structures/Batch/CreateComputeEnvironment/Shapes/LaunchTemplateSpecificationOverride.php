<?php

namespace Sunaoka\Aws\Structures\Batch\CreateComputeEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $launchTemplateId
 * @property string $launchTemplateName
 * @property string $version
 * @property list<string> $targetInstanceTypes
 */
class LaunchTemplateSpecificationOverride extends Shape
{
    /**
     * @param array{
     *     launchTemplateId?: string,
     *     launchTemplateName?: string,
     *     version?: string,
     *     targetInstanceTypes?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
