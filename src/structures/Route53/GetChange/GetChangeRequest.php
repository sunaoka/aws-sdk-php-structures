<?php

namespace Sunaoka\Aws\Structures\Route53\GetChange;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class GetChangeRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
