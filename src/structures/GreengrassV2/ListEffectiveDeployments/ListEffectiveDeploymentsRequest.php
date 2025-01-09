<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\ListEffectiveDeployments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $coreDeviceThingName
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 */
class ListEffectiveDeploymentsRequest extends Request
{
    /**
     * @param array{
     *     coreDeviceThingName: string,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
