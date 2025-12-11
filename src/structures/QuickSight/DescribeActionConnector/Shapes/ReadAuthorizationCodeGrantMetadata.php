<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeActionConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BaseEndpoint
 * @property string $RedirectUrl
 * @property ReadAuthorizationCodeGrantCredentialsDetails|null $ReadAuthorizationCodeGrantCredentialsDetails
 * @property 'PLAIN_CREDENTIALS'|null $AuthorizationCodeGrantCredentialsSource
 */
class ReadAuthorizationCodeGrantMetadata extends Shape
{
    /**
     * @param array{
     *     BaseEndpoint: string,
     *     RedirectUrl: string,
     *     ReadAuthorizationCodeGrantCredentialsDetails?: ReadAuthorizationCodeGrantCredentialsDetails|null,
     *     AuthorizationCodeGrantCredentialsSource?: 'PLAIN_CREDENTIALS'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
