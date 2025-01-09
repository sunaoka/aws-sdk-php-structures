<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetEnabledStandards;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $StandardsSubscriptionArns
 * @property string $NextToken
 * @property int $MaxResults
 */
class GetEnabledStandardsRequest extends Request
{
    /**
     * @param array{
     *     StandardsSubscriptionArns?: list<string>,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
