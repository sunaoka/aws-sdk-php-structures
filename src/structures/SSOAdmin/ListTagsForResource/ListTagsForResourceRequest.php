<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $InstanceArn
 * @property string|null $NextToken
 * @property string $ResourceArn
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{
     *     InstanceArn?: string|null,
     *     NextToken?: string|null,
     *     ResourceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
