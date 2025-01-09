<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeRedshiftIdcApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TrustedTokenIssuerArn
 * @property list<string> $AuthorizedAudiencesList
 */
class AuthorizedTokenIssuer extends Shape
{
    /**
     * @param array{
     *     TrustedTokenIssuerArn?: string,
     *     AuthorizedAudiencesList?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
