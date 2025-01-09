<?php

namespace Sunaoka\Aws\Structures\Route53\DeleteReusableDelegationSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class DeleteReusableDelegationSetRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
