<?php

namespace Sunaoka\Aws\Structures\MemoryDB\CreateACL;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ACLName
 * @property list<string> $UserNames
 * @property list<Shapes\Tag> $Tags
 */
class CreateACLRequest extends Request
{
    /**
     * @param array{
     *     ACLName: string,
     *     UserNames?: list<string>,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
