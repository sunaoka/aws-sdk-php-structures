<?php

namespace Sunaoka\Aws\Structures\CloudTrail\GetTrail;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class GetTrailRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
