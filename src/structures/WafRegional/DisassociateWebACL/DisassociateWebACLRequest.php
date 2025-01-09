<?php

namespace Sunaoka\Aws\Structures\WafRegional\DisassociateWebACL;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 */
class DisassociateWebACLRequest extends Request
{
    /**
     * @param array{ResourceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
