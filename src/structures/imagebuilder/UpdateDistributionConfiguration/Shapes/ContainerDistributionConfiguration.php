<?php

namespace Sunaoka\Aws\Structures\imagebuilder\UpdateDistributionConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $description
 * @property list<string>|null $containerTags
 * @property TargetContainerRepository $targetRepository
 */
class ContainerDistributionConfiguration extends Shape
{
    /**
     * @param array{
     *     description?: string|null,
     *     containerTags?: list<string>|null,
     *     targetRepository: TargetContainerRepository
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
