<?php

namespace Sunaoka\Aws\Structures\RTBFabric\GetUpdate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gatewayId
 * @property string $updateId
 */
class GetUpdateRequest extends Request
{
    /**
     * @param array{
     *     gatewayId: string,
     *     updateId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
