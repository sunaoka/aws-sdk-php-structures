<?php

namespace Sunaoka\Aws\Structures\imagebuilder\UpdateDistributionConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $launchTemplateId
 * @property string|null $launchTemplateName
 * @property string|null $launchTemplateVersion
 */
class FastLaunchLaunchTemplateSpecification extends Shape
{
    /**
     * @param array{
     *     launchTemplateId?: string|null,
     *     launchTemplateName?: string|null,
     *     launchTemplateVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
