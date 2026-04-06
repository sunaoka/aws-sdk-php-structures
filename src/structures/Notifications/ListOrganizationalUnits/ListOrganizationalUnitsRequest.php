<?php

namespace Sunaoka\Aws\Structures\Notifications\ListOrganizationalUnits;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $notificationConfigurationArn
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListOrganizationalUnitsRequest extends Request
{
    /**
     * @param array{
     *     notificationConfigurationArn: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
