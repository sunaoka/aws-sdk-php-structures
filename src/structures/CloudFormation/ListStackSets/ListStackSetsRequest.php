<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListStackSets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property 'ACTIVE'|'DELETED'|null $Status
 * @property 'SELF'|'DELEGATED_ADMIN'|null $CallAs
 */
class ListStackSetsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     Status?: 'ACTIVE'|'DELETED'|null,
     *     CallAs?: 'SELF'|'DELEGATED_ADMIN'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
