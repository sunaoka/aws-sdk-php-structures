<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\ListConnectorOperations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectorArn
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListConnectorOperationsRequest extends Request
{
    /**
     * @param array{
     *     connectorArn: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
