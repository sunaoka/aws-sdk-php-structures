<?php

namespace Sunaoka\Aws\Structures\Kafka\ListConfigurationRevisions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListConfigurationRevisionsRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
