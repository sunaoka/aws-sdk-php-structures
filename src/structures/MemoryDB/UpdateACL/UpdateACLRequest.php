<?php

namespace Sunaoka\Aws\Structures\MemoryDB\UpdateACL;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ACLName
 * @property list<string> $UserNamesToAdd
 * @property list<string> $UserNamesToRemove
 */
class UpdateACLRequest extends Request
{
    /**
     * @param array{
     *     ACLName: string,
     *     UserNamesToAdd?: list<string>,
     *     UserNamesToRemove?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
