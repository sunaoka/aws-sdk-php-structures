<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\GetTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 */
class GetTagsRequest extends Request
{
    /**
     * @param array{Arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
