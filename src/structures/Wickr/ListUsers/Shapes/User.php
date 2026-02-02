<?php

namespace Sunaoka\Aws\Structures\Wickr\ListUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $userId
 * @property string|null $firstName
 * @property string|null $lastName
 * @property string|null $username
 * @property list<string>|null $securityGroups
 * @property bool|null $isAdmin
 * @property bool|null $suspended
 * @property int|null $status
 * @property bool|null $otpEnabled
 * @property string|null $scimId
 * @property string|null $type
 * @property string|null $cell
 * @property string|null $countryCode
 * @property int|null $challengeFailures
 * @property bool|null $isInviteExpired
 * @property bool|null $isUser
 * @property string|null $inviteCode
 * @property bool|null $codeValidation
 * @property string|null $uname
 */
class User extends Shape
{
    /**
     * @param array{
     *     userId?: string|null,
     *     firstName?: string|null,
     *     lastName?: string|null,
     *     username?: string|null,
     *     securityGroups?: list<string>|null,
     *     isAdmin?: bool|null,
     *     suspended?: bool|null,
     *     status?: int|null,
     *     otpEnabled?: bool|null,
     *     scimId?: string|null,
     *     type?: string|null,
     *     cell?: string|null,
     *     countryCode?: string|null,
     *     challengeFailures?: int|null,
     *     isInviteExpired?: bool|null,
     *     isUser?: bool|null,
     *     inviteCode?: string|null,
     *     codeValidation?: bool|null,
     *     uname?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
