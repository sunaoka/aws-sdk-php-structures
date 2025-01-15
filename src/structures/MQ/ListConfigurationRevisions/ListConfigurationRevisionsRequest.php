<?php

namespace Sunaoka\Aws\Structures\MQ\ListConfigurationRevisions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationId
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListConfigurationRevisionsRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationId: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
