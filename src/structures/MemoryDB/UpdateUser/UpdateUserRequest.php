<?php

namespace Sunaoka\Aws\Structures\MemoryDB\UpdateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserName
 * @property Shapes\AuthenticationMode $AuthenticationMode
 * @property string $AccessString
 */
class UpdateUserRequest extends Request
{
    /**
     * @param array{
     *     UserName: string,
     *     AuthenticationMode?: Shapes\AuthenticationMode,
     *     AccessString?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
