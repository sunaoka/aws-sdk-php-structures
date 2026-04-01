<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\GetService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $targetUrl
 * @property 'personal'|'group' $tokenType
 * @property string|null $groupId
 */
class RegisteredGitLabServiceDetails extends Shape
{
    /**
     * @param array{
     *     targetUrl: string,
     *     tokenType: 'personal'|'group',
     *     groupId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
