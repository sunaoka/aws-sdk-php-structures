<?php

namespace Sunaoka\Aws\Structures\Iot\CreateAuthorizer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $authorizerName
 * @property string $authorizerFunctionArn
 * @property string|null $tokenKeyName
 * @property array<string, string>|null $tokenSigningPublicKeys
 * @property 'ACTIVE'|'INACTIVE'|null $status
 * @property list<Shapes\Tag>|null $tags
 * @property bool|null $signingDisabled
 * @property bool|null $enableCachingForHttp
 */
class CreateAuthorizerRequest extends Request
{
    /**
     * @param array{
     *     authorizerName: string,
     *     authorizerFunctionArn: string,
     *     tokenKeyName?: string|null,
     *     tokenSigningPublicKeys?: array<string, string>|null,
     *     status?: 'ACTIVE'|'INACTIVE'|null,
     *     tags?: list<Shapes\Tag>|null,
     *     signingDisabled?: bool|null,
     *     enableCachingForHttp?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
