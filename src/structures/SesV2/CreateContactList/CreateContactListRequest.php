<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateContactList;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContactListName
 * @property list<Shapes\Topic>|null $Topics
 * @property string|null $Description
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateContactListRequest extends Request
{
    /**
     * @param array{
     *     ContactListName: string,
     *     Topics?: list<Shapes\Topic>|null,
     *     Description?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
