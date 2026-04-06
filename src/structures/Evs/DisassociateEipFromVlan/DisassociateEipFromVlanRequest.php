<?php

namespace Sunaoka\Aws\Structures\Evs\DisassociateEipFromVlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $environmentId
 * @property string $vlanName
 * @property string $associationId
 */
class DisassociateEipFromVlanRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     environmentId: string,
     *     vlanName: string,
     *     associationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
