<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetSetupHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceName
 * @property string|null $pageToken
 */
class GetSetupHistoryRequest extends Request
{
    /**
     * @param array{
     *     resourceName: string,
     *     pageToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
