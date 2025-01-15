<?php

namespace Sunaoka\Aws\Structures\MemoryDB\UpdateACL;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ACLName
 * @property list<string>|null $UserNamesToAdd
 * @property list<string>|null $UserNamesToRemove
 */
class UpdateACLRequest extends Request
{
    /**
     * @param array{
     *     ACLName: string,
     *     UserNamesToAdd?: list<string>|null,
     *     UserNamesToRemove?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
