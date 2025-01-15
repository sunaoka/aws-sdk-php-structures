<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CreateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserId
 * @property string $UserName
 * @property string $Engine
 * @property list<string>|null $Passwords
 * @property string $AccessString
 * @property bool|null $NoPasswordRequired
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\AuthenticationMode|null $AuthenticationMode
 */
class CreateUserRequest extends Request
{
    /**
     * @param array{
     *     UserId: string,
     *     UserName: string,
     *     Engine: string,
     *     Passwords?: list<string>|null,
     *     AccessString: string,
     *     NoPasswordRequired?: bool|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     AuthenticationMode?: Shapes\AuthenticationMode|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
