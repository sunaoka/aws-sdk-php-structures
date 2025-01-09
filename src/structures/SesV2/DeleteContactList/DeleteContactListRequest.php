<?php

namespace Sunaoka\Aws\Structures\SesV2\DeleteContactList;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContactListName
 */
class DeleteContactListRequest extends Request
{
    /**
     * @param array{ContactListName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
