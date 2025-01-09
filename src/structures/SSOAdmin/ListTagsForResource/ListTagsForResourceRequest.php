<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceArn
 * @property string $NextToken
 * @property string $ResourceArn
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{
     *     InstanceArn?: string,
     *     NextToken?: string,
     *     ResourceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
