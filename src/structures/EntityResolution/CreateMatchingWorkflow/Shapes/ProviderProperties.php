<?php

namespace Sunaoka\Aws\Structures\EntityResolution\CreateMatchingWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IntermediateSourceConfiguration $intermediateSourceConfiguration
 * @property Document $providerConfiguration
 * @property string $providerServiceArn
 */
class ProviderProperties extends Shape
{
    /**
     * @param array{
     *     intermediateSourceConfiguration?: IntermediateSourceConfiguration,
     *     providerConfiguration?: Document,
     *     providerServiceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
