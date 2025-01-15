<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRelationalDatabaseEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $relationalDatabaseName
 * @property int|null $durationInMinutes
 * @property string|null $pageToken
 */
class GetRelationalDatabaseEventsRequest extends Request
{
    /**
     * @param array{
     *     relationalDatabaseName: string,
     *     durationInMinutes?: int|null,
     *     pageToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
