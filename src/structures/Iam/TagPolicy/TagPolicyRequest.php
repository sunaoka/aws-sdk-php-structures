<?php

namespace Sunaoka\Aws\Structures\Iam\TagPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PolicyArn
 * @property list<Shapes\Tag> $Tags
 */
class TagPolicyRequest extends Request
{
    /**
     * @param array{
     *     PolicyArn: string,
     *     Tags: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
