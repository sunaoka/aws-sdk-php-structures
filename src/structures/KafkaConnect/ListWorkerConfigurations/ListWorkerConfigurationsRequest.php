<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\ListWorkerConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $maxResults
 * @property string $namePrefix
 * @property string $nextToken
 */
class ListWorkerConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int,
     *     namePrefix?: string,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
