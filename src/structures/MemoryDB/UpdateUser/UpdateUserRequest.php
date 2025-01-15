<?php

namespace Sunaoka\Aws\Structures\MemoryDB\UpdateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserName
 * @property Shapes\AuthenticationMode|null $AuthenticationMode
 * @property string|null $AccessString
 */
class UpdateUserRequest extends Request
{
    /**
     * @param array{
     *     UserName: string,
     *     AuthenticationMode?: Shapes\AuthenticationMode|null,
     *     AccessString?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
