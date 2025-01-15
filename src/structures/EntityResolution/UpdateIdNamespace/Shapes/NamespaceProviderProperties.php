<?php

namespace Sunaoka\Aws\Structures\EntityResolution\UpdateIdNamespace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Document|null $providerConfiguration
 * @property string $providerServiceArn
 */
class NamespaceProviderProperties extends Shape
{
    /**
     * @param array{
     *     providerConfiguration?: Document|null,
     *     providerServiceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
