<?php

namespace Sunaoka\Aws\Structures\DirectoryServiceData\DescribeUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property list<string> $OtherAttributes
 * @property string $Realm
 * @property string $SAMAccountName
 */
class DescribeUserRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     OtherAttributes?: list<string>,
     *     Realm?: string,
     *     SAMAccountName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
