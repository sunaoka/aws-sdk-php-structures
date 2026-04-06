<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyRedshiftIdcApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TrustedTokenIssuerArn
 * @property list<string>|null $AuthorizedAudiencesList
 */
class AuthorizedTokenIssuer extends Shape
{
    /**
     * @param array{
     *     TrustedTokenIssuerArn?: string|null,
     *     AuthorizedAudiencesList?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
