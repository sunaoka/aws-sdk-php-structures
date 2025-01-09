<?php

namespace Sunaoka\Aws\Structures\ElastiCache\ModifyUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserId
 * @property string $AccessString
 * @property string $AppendAccessString
 * @property list<string> $Passwords
 * @property bool $NoPasswordRequired
 * @property Shapes\AuthenticationMode $AuthenticationMode
 * @property string $Engine
 */
class ModifyUserRequest extends Request
{
    /**
     * @param array{
     *     UserId: string,
     *     AccessString?: string,
     *     AppendAccessString?: string,
     *     Passwords?: list<string>,
     *     NoPasswordRequired?: bool,
     *     AuthenticationMode?: Shapes\AuthenticationMode,
     *     Engine?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
