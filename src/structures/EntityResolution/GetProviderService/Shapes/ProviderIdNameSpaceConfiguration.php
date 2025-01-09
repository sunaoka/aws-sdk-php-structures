<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetProviderService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $description
 * @property Document $providerSourceConfigurationDefinition
 * @property Document $providerTargetConfigurationDefinition
 */
class ProviderIdNameSpaceConfiguration extends Shape
{
    /**
     * @param array{
     *     description?: string,
     *     providerSourceConfigurationDefinition?: Document,
     *     providerTargetConfigurationDefinition?: Document
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
