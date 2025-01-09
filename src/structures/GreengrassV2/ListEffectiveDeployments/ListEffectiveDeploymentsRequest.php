<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\ListEffectiveDeployments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $coreDeviceThingName
 * @property int $maxResults
 * @property string $nextToken
 */
class ListEffectiveDeploymentsRequest extends Request
{
    /**
     * @param array{
     *     coreDeviceThingName: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
