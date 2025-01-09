<?php

namespace Sunaoka\Aws\Structures\EntityResolution\UpdateIdNamespace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Document $providerConfiguration
 * @property string $providerServiceArn
 */
class NamespaceProviderProperties extends Shape
{
    /**
     * @param array{
     *     providerConfiguration?: Document,
     *     providerServiceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
