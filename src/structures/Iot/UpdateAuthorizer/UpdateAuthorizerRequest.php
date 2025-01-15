<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateAuthorizer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $authorizerName
 * @property string|null $authorizerFunctionArn
 * @property string|null $tokenKeyName
 * @property array<string, string>|null $tokenSigningPublicKeys
 * @property 'ACTIVE'|'INACTIVE'|null $status
 * @property bool|null $enableCachingForHttp
 */
class UpdateAuthorizerRequest extends Request
{
    /**
     * @param array{
     *     authorizerName: string,
     *     authorizerFunctionArn?: string|null,
     *     tokenKeyName?: string|null,
     *     tokenSigningPublicKeys?: array<string, string>|null,
     *     status?: 'ACTIVE'|'INACTIVE'|null,
     *     enableCachingForHttp?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
