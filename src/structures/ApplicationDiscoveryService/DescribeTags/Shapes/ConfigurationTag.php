<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\DescribeTags\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SERVER'|'PROCESS'|'CONNECTION'|'APPLICATION' $configurationType
 * @property string $configurationId
 * @property string $key
 * @property string $value
 * @property \Aws\Api\DateTimeResult $timeOfCreation
 */
class ConfigurationTag extends Shape
{
    /**
     * @param array{
     *     configurationType?: 'SERVER'|'PROCESS'|'CONNECTION'|'APPLICATION',
     *     configurationId?: string,
     *     key?: string,
     *     value?: string,
     *     timeOfCreation?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
