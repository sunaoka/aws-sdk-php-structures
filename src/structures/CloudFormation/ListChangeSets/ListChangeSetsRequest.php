<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListChangeSets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackName
 * @property string|null $NextToken
 */
class ListChangeSetsRequest extends Request
{
    /**
     * @param array{
     *     StackName: string,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
