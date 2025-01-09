<?php

namespace Sunaoka\Aws\Structures\ConfigService\ListConfigurationRecorders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'recordingScope' $filterName
 * @property list<string> $filterValue
 */
class ConfigurationRecorderFilter extends Shape
{
    /**
     * @param array{
     *     filterName?: 'recordingScope',
     *     filterValue?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
