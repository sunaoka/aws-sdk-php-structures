<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateWorkloadIdentity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property list<string>|null $allowedResourceOauth2ReturnUrls
 */
class CreateWorkloadIdentityRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     allowedResourceOauth2ReturnUrls?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
