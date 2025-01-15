<?php

namespace Sunaoka\Aws\Structures\Organizations\ListTargetsForPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PolicyId
 * @property string|null $NextToken
 * @property int<1, 20>|null $MaxResults
 */
class ListTargetsForPolicyRequest extends Request
{
    /**
     * @param array{
     *     PolicyId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 20>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
