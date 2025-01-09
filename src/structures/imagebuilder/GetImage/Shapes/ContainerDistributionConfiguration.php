<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $description
 * @property list<string> $containerTags
 * @property TargetContainerRepository $targetRepository
 */
class ContainerDistributionConfiguration extends Shape
{
    /**
     * @param array{
     *     description?: string,
     *     containerTags?: list<string>,
     *     targetRepository: TargetContainerRepository
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
