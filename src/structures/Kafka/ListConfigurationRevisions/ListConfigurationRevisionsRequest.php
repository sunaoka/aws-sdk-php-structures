<?php

namespace Sunaoka\Aws\Structures\Kafka\ListConfigurationRevisions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class ListConfigurationRevisionsRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
