<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetOfferingStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 */
class GetOfferingStatusRequest extends Request
{
    /**
     * @param array{nextToken?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
