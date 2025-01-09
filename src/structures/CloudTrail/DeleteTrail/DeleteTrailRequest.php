<?php

namespace Sunaoka\Aws\Structures\CloudTrail\DeleteTrail;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DeleteTrailRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
