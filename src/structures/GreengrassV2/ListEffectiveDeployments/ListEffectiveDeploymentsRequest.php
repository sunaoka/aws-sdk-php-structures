<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\ListEffectiveDeployments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $coreDeviceThingName
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListEffectiveDeploymentsRequest extends Request
{
    /**
     * @param array{
     *     coreDeviceThingName: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
