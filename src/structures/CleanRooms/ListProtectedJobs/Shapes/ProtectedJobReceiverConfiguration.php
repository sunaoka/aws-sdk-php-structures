<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListProtectedJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DIRECT_ANALYSIS' $analysisType
 * @property ProtectedJobConfigurationDetails|null $configurationDetails
 */
class ProtectedJobReceiverConfiguration extends Shape
{
    /**
     * @param array{
     *     analysisType: 'DIRECT_ANALYSIS',
     *     configurationDetails?: ProtectedJobConfigurationDetails|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
