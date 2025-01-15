<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\ListTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectorArn
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class ListTemplatesRequest extends Request
{
    /**
     * @param array{
     *     ConnectorArn: string,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
