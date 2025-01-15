<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\DescribeTags\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SERVER'|'PROCESS'|'CONNECTION'|'APPLICATION'|null $configurationType
 * @property string|null $configurationId
 * @property string|null $key
 * @property string|null $value
 * @property \Aws\Api\DateTimeResult|null $timeOfCreation
 */
class ConfigurationTag extends Shape
{
    /**
     * @param array{
     *     configurationType?: 'SERVER'|'PROCESS'|'CONNECTION'|'APPLICATION'|null,
     *     configurationId?: string|null,
     *     key?: string|null,
     *     value?: string|null,
     *     timeOfCreation?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
