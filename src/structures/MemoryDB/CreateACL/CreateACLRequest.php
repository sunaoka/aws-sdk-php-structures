<?php

namespace Sunaoka\Aws\Structures\MemoryDB\CreateACL;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ACLName
 * @property list<string>|null $UserNames
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateACLRequest extends Request
{
    /**
     * @param array{
     *     ACLName: string,
     *     UserNames?: list<string>|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
