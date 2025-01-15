<?php

namespace Sunaoka\Aws\Structures\AppRunner\CreateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'REPOSITORY'|'API' $ConfigurationSource
 * @property CodeConfigurationValues|null $CodeConfigurationValues
 */
class CodeConfiguration extends Shape
{
    /**
     * @param array{
     *     ConfigurationSource: 'REPOSITORY'|'API',
     *     CodeConfigurationValues?: CodeConfigurationValues|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
