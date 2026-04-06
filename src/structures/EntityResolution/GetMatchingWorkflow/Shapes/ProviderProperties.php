<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetMatchingWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IntermediateSourceConfiguration|null $intermediateSourceConfiguration
 * @property Document|null $providerConfiguration
 * @property string $providerServiceArn
 */
class ProviderProperties extends Shape
{
    /**
     * @param array{
     *     intermediateSourceConfiguration?: IntermediateSourceConfiguration|null,
     *     providerConfiguration?: Document|null,
     *     providerServiceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
