<?php

namespace Sunaoka\Aws\Structures\Iot\GetThingConnectivityData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingName
 * @property bool|null $includeSocketInformation
 */
class GetThingConnectivityDataRequest extends Request
{
    /**
     * @param array{
     *     thingName: string,
     *     includeSocketInformation?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
