<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListProtectedQueries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DIRECT_ANALYSIS'|'ADDITIONAL_ANALYSIS' $analysisType
 * @property ConfigurationDetails $configurationDetails
 */
class ReceiverConfiguration extends Shape
{
    /**
     * @param array{
     *     analysisType: 'DIRECT_ANALYSIS'|'ADDITIONAL_ANALYSIS',
     *     configurationDetails?: ConfigurationDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
