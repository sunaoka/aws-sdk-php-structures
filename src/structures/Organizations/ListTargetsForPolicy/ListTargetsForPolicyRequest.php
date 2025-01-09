<?php

namespace Sunaoka\Aws\Structures\Organizations\ListTargetsForPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PolicyId
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListTargetsForPolicyRequest extends Request
{
    /**
     * @param array{
     *     PolicyId: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
