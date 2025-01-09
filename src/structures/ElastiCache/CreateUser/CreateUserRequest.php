<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CreateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserId
 * @property string $UserName
 * @property string $Engine
 * @property list<string> $Passwords
 * @property string $AccessString
 * @property bool $NoPasswordRequired
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\AuthenticationMode $AuthenticationMode
 */
class CreateUserRequest extends Request
{
    /**
     * @param array{
     *     UserId: string,
     *     UserName: string,
     *     Engine: string,
     *     Passwords?: list<string>,
     *     AccessString: string,
     *     NoPasswordRequired?: bool,
     *     Tags?: list<Shapes\Tag>,
     *     AuthenticationMode?: Shapes\AuthenticationMode
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
