<?php

namespace Sunaoka\Aws\Structures\PcaConnectorScep\ListChallengeMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000> $MaxResults
 * @property string $NextToken
 * @property string $ConnectorArn
 */
class ListChallengeMetadataRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 1000>,
     *     NextToken?: string,
     *     ConnectorArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
