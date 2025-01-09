<?php

namespace Sunaoka\Aws\Structures\CloudHSMV2\DeleteHsm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 * @property string $HsmId
 * @property string $EniId
 * @property string $EniIp
 */
class DeleteHsmRequest extends Request
{
    /**
     * @param array{
     *     ClusterId: string,
     *     HsmId?: string,
     *     EniId?: string,
     *     EniIp?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
