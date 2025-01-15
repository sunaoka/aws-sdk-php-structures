<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateApnsChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BundleId
 * @property string|null $Certificate
 * @property string|null $DefaultAuthenticationMethod
 * @property bool|null $Enabled
 * @property string|null $PrivateKey
 * @property string|null $TeamId
 * @property string|null $TokenKey
 * @property string|null $TokenKeyId
 */
class APNSChannelRequest extends Shape
{
    /**
     * @param array{
     *     BundleId?: string|null,
     *     Certificate?: string|null,
     *     DefaultAuthenticationMethod?: string|null,
     *     Enabled?: bool|null,
     *     PrivateKey?: string|null,
     *     TeamId?: string|null,
     *     TokenKey?: string|null,
     *     TokenKeyId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
