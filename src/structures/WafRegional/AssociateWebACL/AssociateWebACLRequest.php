<?php

namespace Sunaoka\Aws\Structures\WafRegional\AssociateWebACL;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WebACLId
 * @property string $ResourceArn
 */
class AssociateWebACLRequest extends Request
{
    /**
     * @param array{
     *     WebACLId: string,
     *     ResourceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
