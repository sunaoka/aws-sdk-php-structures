<?php

namespace Sunaoka\Aws\Structures\ElastiCache\ModifyUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserId
 * @property string|null $AccessString
 * @property string|null $AppendAccessString
 * @property list<string>|null $Passwords
 * @property bool|null $NoPasswordRequired
 * @property Shapes\AuthenticationMode|null $AuthenticationMode
 * @property string|null $Engine
 */
class ModifyUserRequest extends Request
{
    /**
     * @param array{
     *     UserId: string,
     *     AccessString?: string|null,
     *     AppendAccessString?: string|null,
     *     Passwords?: list<string>|null,
     *     NoPasswordRequired?: bool|null,
     *     AuthenticationMode?: Shapes\AuthenticationMode|null,
     *     Engine?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
