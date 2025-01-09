<?php

namespace Sunaoka\Aws\Structures\PcaConnectorScep\ListChallengeMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $MaxResults
 * @property string $NextToken
 * @property string $ConnectorArn
 */
class ListChallengeMetadataRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int,
     *     NextToken?: string,
     *     ConnectorArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
