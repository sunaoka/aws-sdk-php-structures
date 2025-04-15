<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetProviderService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $description
 * @property Document|null $providerTargetConfigurationDefinition
 * @property Document|null $providerSourceConfigurationDefinition
 */
class ProviderIdNameSpaceConfiguration extends Shape
{
    /**
     * @param array{
     *     description?: string|null,
     *     providerTargetConfigurationDefinition?: Document|null,
     *     providerSourceConfigurationDefinition?: Document|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
