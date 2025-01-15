<?php

namespace Sunaoka\Aws\Structures\ConfigService\ListConfigurationRecorders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'recordingScope'|null $filterName
 * @property list<string>|null $filterValue
 */
class ConfigurationRecorderFilter extends Shape
{
    /**
     * @param array{
     *     filterName?: 'recordingScope'|null,
     *     filterValue?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
