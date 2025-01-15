<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListTokens\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TokenId
 * @property string|null $TokenType
 * @property string|null $LicenseArn
 * @property string|null $ExpirationTime
 * @property list<string>|null $TokenProperties
 * @property list<string>|null $RoleArns
 * @property string|null $Status
 */
class TokenData extends Shape
{
    /**
     * @param array{
     *     TokenId?: string|null,
     *     TokenType?: string|null,
     *     LicenseArn?: string|null,
     *     ExpirationTime?: string|null,
     *     TokenProperties?: list<string>|null,
     *     RoleArns?: list<string>|null,
     *     Status?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
