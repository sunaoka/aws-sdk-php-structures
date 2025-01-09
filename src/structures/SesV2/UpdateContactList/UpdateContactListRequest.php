<?php

namespace Sunaoka\Aws\Structures\SesV2\UpdateContactList;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContactListName
 * @property list<Shapes\Topic> $Topics
 * @property string $Description
 */
class UpdateContactListRequest extends Request
{
    /**
     * @param array{
     *     ContactListName: string,
     *     Topics?: list<Shapes\Topic>,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
