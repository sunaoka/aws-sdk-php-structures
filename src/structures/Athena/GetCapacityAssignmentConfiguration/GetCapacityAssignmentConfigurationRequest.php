<?php

namespace Sunaoka\Aws\Structures\Athena\GetCapacityAssignmentConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CapacityReservationName
 */
class GetCapacityAssignmentConfigurationRequest extends Request
{
    /**
     * @param array{CapacityReservationName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
