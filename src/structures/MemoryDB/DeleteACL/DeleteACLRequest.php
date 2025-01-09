<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DeleteACL;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ACLName
 */
class DeleteACLRequest extends Request
{
    /**
     * @param array{ACLName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
