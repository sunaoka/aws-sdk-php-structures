<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeDefaultAuthorizer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $authorizerName
 * @property string|null $authorizerArn
 * @property string|null $authorizerFunctionArn
 * @property string|null $tokenKeyName
 * @property array<string, string>|null $tokenSigningPublicKeys
 * @property 'ACTIVE'|'INACTIVE'|null $status
 * @property \Aws\Api\DateTimeResult|null $creationDate
 * @property \Aws\Api\DateTimeResult|null $lastModifiedDate
 * @property bool|null $signingDisabled
 * @property bool|null $enableCachingForHttp
 */
class AuthorizerDescription extends Shape
{
    /**
     * @param array{
     *     authorizerName?: string|null,
     *     authorizerArn?: string|null,
     *     authorizerFunctionArn?: string|null,
     *     tokenKeyName?: string|null,
     *     tokenSigningPublicKeys?: array<string, string>|null,
     *     status?: 'ACTIVE'|'INACTIVE'|null,
     *     creationDate?: \Aws\Api\DateTimeResult|null,
     *     lastModifiedDate?: \Aws\Api\DateTimeResult|null,
     *     signingDisabled?: bool|null,
     *     enableCachingForHttp?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
