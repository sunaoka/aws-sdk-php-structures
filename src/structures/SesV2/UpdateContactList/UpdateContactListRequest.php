<?php

namespace Sunaoka\Aws\Structures\SesV2\UpdateContactList;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContactListName
 * @property list<Shapes\Topic>|null $Topics
 * @property string|null $Description
 */
class UpdateContactListRequest extends Request
{
    /**
     * @param array{
     *     ContactListName: string,
     *     Topics?: list<Shapes\Topic>|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
