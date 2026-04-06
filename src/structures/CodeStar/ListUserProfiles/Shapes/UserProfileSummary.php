<?php

namespace Sunaoka\Aws\Structures\CodeStar\ListUserProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $userArn
 * @property string|null $displayName
 * @property string|null $emailAddress
 * @property string|null $sshPublicKey
 */
class UserProfileSummary extends Shape
{
    /**
     * @param array{
     *     userArn?: string|null,
     *     displayName?: string|null,
     *     emailAddress?: string|null,
     *     sshPublicKey?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
