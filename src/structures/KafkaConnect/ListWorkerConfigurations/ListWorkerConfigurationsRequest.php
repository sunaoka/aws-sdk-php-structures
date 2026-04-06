<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\ListWorkerConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $maxResults
 * @property string|null $namePrefix
 * @property string|null $nextToken
 */
class ListWorkerConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>|null,
     *     namePrefix?: string|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
