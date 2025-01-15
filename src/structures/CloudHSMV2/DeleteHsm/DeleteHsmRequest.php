<?php

namespace Sunaoka\Aws\Structures\CloudHSMV2\DeleteHsm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 * @property string|null $HsmId
 * @property string|null $EniId
 * @property string|null $EniIp
 */
class DeleteHsmRequest extends Request
{
    /**
     * @param array{
     *     ClusterId: string,
     *     HsmId?: string|null,
     *     EniId?: string|null,
     *     EniIp?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
