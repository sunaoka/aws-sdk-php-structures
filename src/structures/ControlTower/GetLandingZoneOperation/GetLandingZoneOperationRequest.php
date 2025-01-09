<?php

namespace Sunaoka\Aws\Structures\ControlTower\GetLandingZoneOperation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $operationIdentifier
 */
class GetLandingZoneOperationRequest extends Request
{
    /**
     * @param array{operationIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
