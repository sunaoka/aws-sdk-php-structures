<?php

namespace Sunaoka\Aws\Structures\AppRunner\ResumeService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'REPOSITORY'|'API' $ConfigurationSource
 * @property CodeConfigurationValues $CodeConfigurationValues
 */
class CodeConfiguration extends Shape
{
    /**
     * @param array{
     *     ConfigurationSource: 'REPOSITORY'|'API',
     *     CodeConfigurationValues?: CodeConfigurationValues
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
