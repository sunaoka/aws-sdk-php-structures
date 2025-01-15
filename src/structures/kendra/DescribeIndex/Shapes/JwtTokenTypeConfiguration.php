<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeIndex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'URL'|'SECRET_MANAGER' $KeyLocation
 * @property string|null $URL
 * @property string|null $SecretManagerArn
 * @property string|null $UserNameAttributeField
 * @property string|null $GroupAttributeField
 * @property string|null $Issuer
 * @property string|null $ClaimRegex
 */
class JwtTokenTypeConfiguration extends Shape
{
    /**
     * @param array{
     *     KeyLocation: 'URL'|'SECRET_MANAGER',
     *     URL?: string|null,
     *     SecretManagerArn?: string|null,
     *     UserNameAttributeField?: string|null,
     *     GroupAttributeField?: string|null,
     *     Issuer?: string|null,
     *     ClaimRegex?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
