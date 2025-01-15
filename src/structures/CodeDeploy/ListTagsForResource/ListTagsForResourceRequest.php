<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property string|null $NextToken
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
