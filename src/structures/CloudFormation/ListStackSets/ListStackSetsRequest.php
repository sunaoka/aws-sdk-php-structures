<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListStackSets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $MaxResults
 * @property 'ACTIVE'|'DELETED' $Status
 * @property 'SELF'|'DELEGATED_ADMIN' $CallAs
 */
class ListStackSetsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int,
     *     Status?: 'ACTIVE'|'DELETED',
     *     CallAs?: 'SELF'|'DELEGATED_ADMIN'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
