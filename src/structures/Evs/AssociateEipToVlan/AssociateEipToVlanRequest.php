<?php

namespace Sunaoka\Aws\Structures\Evs\AssociateEipToVlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $environmentId
 * @property string $vlanName
 * @property string $allocationId
 */
class AssociateEipToVlanRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     environmentId: string,
     *     vlanName: string,
     *     allocationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
