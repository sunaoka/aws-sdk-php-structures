<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListPersonalAccessTokens\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PersonalAccessTokenId
 * @property string|null $UserId
 * @property string|null $Name
 * @property \Aws\Api\DateTimeResult|null $DateCreated
 * @property \Aws\Api\DateTimeResult|null $DateLastUsed
 * @property \Aws\Api\DateTimeResult|null $ExpiresTime
 * @property list<string>|null $Scopes
 */
class PersonalAccessTokenSummary extends Shape
{
    /**
     * @param array{
     *     PersonalAccessTokenId?: string|null,
     *     UserId?: string|null,
     *     Name?: string|null,
     *     DateCreated?: \Aws\Api\DateTimeResult|null,
     *     DateLastUsed?: \Aws\Api\DateTimeResult|null,
     *     ExpiresTime?: \Aws\Api\DateTimeResult|null,
     *     Scopes?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
