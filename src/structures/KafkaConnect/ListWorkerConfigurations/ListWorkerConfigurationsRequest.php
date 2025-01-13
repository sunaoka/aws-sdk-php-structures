<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\ListWorkerConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 * @property string $namePrefix
 */
class ListWorkerConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>,
     *     nextToken?: string,
     *     namePrefix?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
