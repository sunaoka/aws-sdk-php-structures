<?php

namespace Sunaoka\Aws\Structures\Organizations\PutResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Content
 * @property list<Shapes\Tag>|null $Tags
 */
class PutResourcePolicyRequest extends Request
{
    /**
     * @param array{
     *     Content: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
