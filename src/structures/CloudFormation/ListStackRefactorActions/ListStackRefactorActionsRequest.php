<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListStackRefactorActions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackRefactorId
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListStackRefactorActionsRequest extends Request
{
    /**
     * @param array{
     *     StackRefactorId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
