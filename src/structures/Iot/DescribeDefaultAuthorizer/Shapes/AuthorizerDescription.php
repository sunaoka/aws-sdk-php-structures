<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeDefaultAuthorizer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $authorizerName
 * @property string $authorizerArn
 * @property string $authorizerFunctionArn
 * @property string $tokenKeyName
 * @property array<string, string> $tokenSigningPublicKeys
 * @property 'ACTIVE'|'INACTIVE' $status
 * @property \Aws\Api\DateTimeResult $creationDate
 * @property \Aws\Api\DateTimeResult $lastModifiedDate
 * @property bool $signingDisabled
 * @property bool $enableCachingForHttp
 */
class AuthorizerDescription extends Shape
{
    /**
     * @param array{
     *     authorizerName?: string,
     *     authorizerArn?: string,
     *     authorizerFunctionArn?: string,
     *     tokenKeyName?: string,
     *     tokenSigningPublicKeys?: array<string, string>,
     *     status?: 'ACTIVE'|'INACTIVE',
     *     creationDate?: \Aws\Api\DateTimeResult,
     *     lastModifiedDate?: \Aws\Api\DateTimeResult,
     *     signingDisabled?: bool,
     *     enableCachingForHttp?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
