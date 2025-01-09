<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListTokens\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TokenId
 * @property string $TokenType
 * @property string $LicenseArn
 * @property string $ExpirationTime
 * @property list<string> $TokenProperties
 * @property list<string> $RoleArns
 * @property string $Status
 */
class TokenData extends Shape
{
    /**
     * @param array{
     *     TokenId?: string,
     *     TokenType?: string,
     *     LicenseArn?: string,
     *     ExpirationTime?: string,
     *     TokenProperties?: list<string>,
     *     RoleArns?: list<string>,
     *     Status?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
