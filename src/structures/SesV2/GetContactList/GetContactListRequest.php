<?php

namespace Sunaoka\Aws\Structures\SesV2\GetContactList;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContactListName
 */
class GetContactListRequest extends Request
{
    /**
     * @param array{ContactListName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
