<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListPersonalAccessTokens\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PersonalAccessTokenId
 * @property string $UserId
 * @property string $Name
 * @property \Aws\Api\DateTimeResult $DateCreated
 * @property \Aws\Api\DateTimeResult $DateLastUsed
 * @property \Aws\Api\DateTimeResult $ExpiresTime
 * @property list<string> $Scopes
 */
class PersonalAccessTokenSummary extends Shape
{
    /**
     * @param array{
     *     PersonalAccessTokenId?: string,
     *     UserId?: string,
     *     Name?: string,
     *     DateCreated?: \Aws\Api\DateTimeResult,
     *     DateLastUsed?: \Aws\Api\DateTimeResult,
     *     ExpiresTime?: \Aws\Api\DateTimeResult,
     *     Scopes?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
