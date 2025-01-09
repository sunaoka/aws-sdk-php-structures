<?php

namespace Sunaoka\Aws\Structures\kendra\CreateIndex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'URL'|'SECRET_MANAGER' $KeyLocation
 * @property string $URL
 * @property string $SecretManagerArn
 * @property string $UserNameAttributeField
 * @property string $GroupAttributeField
 * @property string $Issuer
 * @property string $ClaimRegex
 */
class JwtTokenTypeConfiguration extends Shape
{
    /**
     * @param array{
     *     KeyLocation: 'URL'|'SECRET_MANAGER',
     *     URL?: string,
     *     SecretManagerArn?: string,
     *     UserNameAttributeField?: string,
     *     GroupAttributeField?: string,
     *     Issuer?: string,
     *     ClaimRegex?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
