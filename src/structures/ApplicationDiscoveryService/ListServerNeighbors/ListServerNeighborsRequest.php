<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\ListServerNeighbors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $configurationId
 * @property bool|null $portInformationNeeded
 * @property list<string>|null $neighborConfigurationIds
 * @property int|null $maxResults
 * @property string|null $nextToken
 */
class ListServerNeighborsRequest extends Request
{
    /**
     * @param array{
     *     configurationId: string,
     *     portInformationNeeded?: bool|null,
     *     neighborConfigurationIds?: list<string>|null,
     *     maxResults?: int|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
