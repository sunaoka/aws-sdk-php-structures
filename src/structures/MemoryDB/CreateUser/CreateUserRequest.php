<?php

namespace Sunaoka\Aws\Structures\MemoryDB\CreateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserName
 * @property Shapes\AuthenticationMode $AuthenticationMode
 * @property string $AccessString
 * @property list<Shapes\Tag> $Tags
 */
class CreateUserRequest extends Request
{
    /**
     * @param array{
     *     UserName: string,
     *     AuthenticationMode: Shapes\AuthenticationMode,
     *     AccessString: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
