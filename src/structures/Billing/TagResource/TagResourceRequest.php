<?php

namespace Sunaoka\Aws\Structures\Billing\TagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceArn
 * @property list<Shapes\ResourceTag> $resourceTags
 */
class TagResourceRequest extends Request
{
    /**
     * @param array{
     *     resourceArn: string,
     *     resourceTags: list<Shapes\ResourceTag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
