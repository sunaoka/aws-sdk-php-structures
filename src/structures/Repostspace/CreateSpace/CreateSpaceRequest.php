<?php

namespace Sunaoka\Aws\Structures\Repostspace\CreateSpace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $description
 * @property string $name
 * @property string $roleArn
 * @property string $subdomain
 * @property array<string, string> $tags
 * @property 'BASIC'|'STANDARD' $tier
 * @property string $userKMSKey
 */
class CreateSpaceRequest extends Request
{
    /**
     * @param array{
     *     description?: string,
     *     name: string,
     *     roleArn?: string,
     *     subdomain: string,
     *     tags?: array<string, string>,
     *     tier: 'BASIC'|'STANDARD',
     *     userKMSKey?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
