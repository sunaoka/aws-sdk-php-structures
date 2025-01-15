<?php

namespace Sunaoka\Aws\Structures\Repostspace\CreateSpace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $description
 * @property string $name
 * @property string|null $roleArn
 * @property string $subdomain
 * @property array<string, string>|null $tags
 * @property 'BASIC'|'STANDARD' $tier
 * @property string|null $userKMSKey
 */
class CreateSpaceRequest extends Request
{
    /**
     * @param array{
     *     description?: string|null,
     *     name: string,
     *     roleArn?: string|null,
     *     subdomain: string,
     *     tags?: array<string, string>|null,
     *     tier: 'BASIC'|'STANDARD',
     *     userKMSKey?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
