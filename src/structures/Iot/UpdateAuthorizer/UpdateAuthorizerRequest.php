<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateAuthorizer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $authorizerName
 * @property string $authorizerFunctionArn
 * @property string $tokenKeyName
 * @property array<string, string> $tokenSigningPublicKeys
 * @property 'ACTIVE'|'INACTIVE' $status
 * @property bool $enableCachingForHttp
 */
class UpdateAuthorizerRequest extends Request
{
    /**
     * @param array{
     *     authorizerName: string,
     *     authorizerFunctionArn?: string,
     *     tokenKeyName?: string,
     *     tokenSigningPublicKeys?: array<string, string>,
     *     status?: 'ACTIVE'|'INACTIVE',
     *     enableCachingForHttp?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
