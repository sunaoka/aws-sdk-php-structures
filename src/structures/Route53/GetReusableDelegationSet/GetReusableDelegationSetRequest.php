<?php

namespace Sunaoka\Aws\Structures\Route53\GetReusableDelegationSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class GetReusableDelegationSetRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
