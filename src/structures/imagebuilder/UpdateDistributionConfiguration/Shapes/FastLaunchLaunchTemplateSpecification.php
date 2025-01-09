<?php

namespace Sunaoka\Aws\Structures\imagebuilder\UpdateDistributionConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $launchTemplateId
 * @property string $launchTemplateName
 * @property string $launchTemplateVersion
 */
class FastLaunchLaunchTemplateSpecification extends Shape
{
    /**
     * @param array{
     *     launchTemplateId?: string,
     *     launchTemplateName?: string,
     *     launchTemplateVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
