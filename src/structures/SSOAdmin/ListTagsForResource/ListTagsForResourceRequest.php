<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $InstanceArn
 * @property string $ResourceArn
 * @property string|null $NextToken
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{
     *     InstanceArn?: string|null,
     *     ResourceArn: string,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
