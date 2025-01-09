<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateContactList;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContactListName
 * @property list<Shapes\Topic> $Topics
 * @property string $Description
 * @property list<Shapes\Tag> $Tags
 */
class CreateContactListRequest extends Request
{
    /**
     * @param array{
     *     ContactListName: string,
     *     Topics?: list<Shapes\Topic>,
     *     Description?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
