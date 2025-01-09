<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\ListServerNeighbors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $configurationId
 * @property bool $portInformationNeeded
 * @property list<string> $neighborConfigurationIds
 * @property int $maxResults
 * @property string $nextToken
 */
class ListServerNeighborsRequest extends Request
{
    /**
     * @param array{
     *     configurationId: string,
     *     portInformationNeeded?: bool,
     *     neighborConfigurationIds?: list<string>,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
