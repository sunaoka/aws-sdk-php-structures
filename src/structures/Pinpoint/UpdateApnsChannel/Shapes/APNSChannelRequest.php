<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateApnsChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BundleId
 * @property string $Certificate
 * @property string $DefaultAuthenticationMethod
 * @property bool $Enabled
 * @property string $PrivateKey
 * @property string $TeamId
 * @property string $TokenKey
 * @property string $TokenKeyId
 */
class APNSChannelRequest extends Shape
{
    /**
     * @param array{
     *     BundleId?: string,
     *     Certificate?: string,
     *     DefaultAuthenticationMethod?: string,
     *     Enabled?: bool,
     *     PrivateKey?: string,
     *     TeamId?: string,
     *     TokenKey?: string,
     *     TokenKeyId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
