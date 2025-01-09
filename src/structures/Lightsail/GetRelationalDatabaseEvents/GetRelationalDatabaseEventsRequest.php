<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRelationalDatabaseEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $relationalDatabaseName
 * @property int $durationInMinutes
 * @property string $pageToken
 */
class GetRelationalDatabaseEventsRequest extends Request
{
    /**
     * @param array{
     *     relationalDatabaseName: string,
     *     durationInMinutes?: int,
     *     pageToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
