<?php

namespace Sunaoka\Aws\Structures\CloudTrail\GetTrailStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class GetTrailStatusRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
