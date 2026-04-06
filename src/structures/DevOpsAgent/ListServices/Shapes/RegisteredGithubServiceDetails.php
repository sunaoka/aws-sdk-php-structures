<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ListServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $owner
 * @property 'organization'|'user' $ownerType
 * @property string|null $targetUrl
 */
class RegisteredGithubServiceDetails extends Shape
{
    /**
     * @param array{
     *     owner: string,
     *     ownerType: 'organization'|'user',
     *     targetUrl?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
