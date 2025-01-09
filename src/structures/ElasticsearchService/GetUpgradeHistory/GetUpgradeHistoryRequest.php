<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\GetUpgradeHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property int $MaxResults
 * @property string $NextToken
 */
class GetUpgradeHistoryRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
