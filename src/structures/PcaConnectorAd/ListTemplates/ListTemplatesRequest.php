<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\ListTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectorArn
 * @property int<1, 1000> $MaxResults
 * @property string $NextToken
 */
class ListTemplatesRequest extends Request
{
    /**
     * @param array{
     *     ConnectorArn: string,
     *     MaxResults?: int<1, 1000>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
