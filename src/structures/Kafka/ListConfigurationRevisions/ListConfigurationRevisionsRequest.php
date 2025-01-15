<?php

namespace Sunaoka\Aws\Structures\Kafka\ListConfigurationRevisions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListConfigurationRevisionsRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
