<?php

namespace Sunaoka\Aws\Structures\WAFV2\AssociateWebACL;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WebACLArn
 * @property string $ResourceArn
 */
class AssociateWebACLRequest extends Request
{
    /**
     * @param array{
     *     WebACLArn: string,
     *     ResourceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
