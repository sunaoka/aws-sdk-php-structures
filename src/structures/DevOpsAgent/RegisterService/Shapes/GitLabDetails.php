<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\RegisterService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $targetUrl
 * @property 'personal'|'group' $tokenType
 * @property string $tokenValue
 * @property string|null $groupId
 */
class GitLabDetails extends Shape
{
    /**
     * @param array{
     *     targetUrl: string,
     *     tokenType: 'personal'|'group',
     *     tokenValue: string,
     *     groupId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
