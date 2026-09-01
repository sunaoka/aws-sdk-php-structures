<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateCrossRegionRouting;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property bool $IsolatedAll
 */
class UpdateCrossRegionRoutingRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     IsolatedAll: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
