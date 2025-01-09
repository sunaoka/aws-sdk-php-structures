<?php

namespace Sunaoka\Aws\Structures\Iot\CreateAuthorizer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $authorizerName
 * @property string $authorizerFunctionArn
 * @property string $tokenKeyName
 * @property array<string, string> $tokenSigningPublicKeys
 * @property 'ACTIVE'|'INACTIVE' $status
 * @property list<Shapes\Tag> $tags
 * @property bool $signingDisabled
 * @property bool $enableCachingForHttp
 */
class CreateAuthorizerRequest extends Request
{
    /**
     * @param array{
     *     authorizerName: string,
     *     authorizerFunctionArn: string,
     *     tokenKeyName?: string,
     *     tokenSigningPublicKeys?: array<string, string>,
     *     status?: 'ACTIVE'|'INACTIVE',
     *     tags?: list<Shapes\Tag>,
     *     signingDisabled?: bool,
     *     enableCachingForHttp?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
