<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetProviderService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $description
 * @property Document|null $providerSourceConfigurationDefinition
 * @property Document|null $providerTargetConfigurationDefinition
 */
class ProviderIdNameSpaceConfiguration extends Shape
{
    /**
     * @param array{
     *     description?: string|null,
     *     providerSourceConfigurationDefinition?: Document|null,
     *     providerTargetConfigurationDefinition?: Document|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
