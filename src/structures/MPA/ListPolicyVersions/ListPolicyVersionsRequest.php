<?php

namespace Sunaoka\Aws\Structures\MPA\ListPolicyVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 20>|null $MaxResults
 * @property string|null $NextToken
 * @property string $PolicyArn
 */
class ListPolicyVersionsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 20>|null,
     *     NextToken?: string|null,
     *     PolicyArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
