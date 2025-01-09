<?php

namespace Sunaoka\Aws\Structures\MQ\ListConfigurationRevisions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationId
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListConfigurationRevisionsRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationId: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
