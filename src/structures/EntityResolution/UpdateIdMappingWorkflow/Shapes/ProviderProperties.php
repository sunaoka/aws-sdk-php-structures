<?php

namespace Sunaoka\Aws\Structures\EntityResolution\UpdateIdMappingWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $providerServiceArn
 * @property Document|null $providerConfiguration
 * @property IntermediateSourceConfiguration|null $intermediateSourceConfiguration
 */
class ProviderProperties extends Shape
{
    /**
     * @param array{
     *     providerServiceArn: string,
     *     providerConfiguration?: Document|null,
     *     intermediateSourceConfiguration?: IntermediateSourceConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
