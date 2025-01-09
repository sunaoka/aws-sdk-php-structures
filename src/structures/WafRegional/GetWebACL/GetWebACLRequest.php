<?php

namespace Sunaoka\Aws\Structures\WafRegional\GetWebACL;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WebACLId
 */
class GetWebACLRequest extends Request
{
    /**
     * @param array{WebACLId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
