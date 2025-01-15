<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetEnabledStandards;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $StandardsSubscriptionArns
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class GetEnabledStandardsRequest extends Request
{
    /**
     * @param array{
     *     StandardsSubscriptionArns?: list<string>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
