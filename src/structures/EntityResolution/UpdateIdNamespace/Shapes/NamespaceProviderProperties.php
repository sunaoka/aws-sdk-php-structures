<?php

namespace Sunaoka\Aws\Structures\EntityResolution\UpdateIdNamespace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $providerServiceArn
 * @property Document|null $providerConfiguration
 */
class NamespaceProviderProperties extends Shape
{
    /**
     * @param array{
     *     providerServiceArn: string,
     *     providerConfiguration?: Document|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
