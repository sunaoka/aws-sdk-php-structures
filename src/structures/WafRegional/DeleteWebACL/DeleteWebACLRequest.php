<?php

namespace Sunaoka\Aws\Structures\WafRegional\DeleteWebACL;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WebACLId
 * @property string $ChangeToken
 */
class DeleteWebACLRequest extends Request
{
    /**
     * @param array{
     *     WebACLId: string,
     *     ChangeToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
