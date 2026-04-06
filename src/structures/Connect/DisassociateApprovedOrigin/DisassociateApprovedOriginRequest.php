<?php

namespace Sunaoka\Aws\Structures\Connect\DisassociateApprovedOrigin;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $Origin
 */
class DisassociateApprovedOriginRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     Origin: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
