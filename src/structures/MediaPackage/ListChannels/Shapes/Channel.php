<?php

namespace Sunaoka\Aws\Structures\MediaPackage\ListChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $CreatedAt
 * @property string|null $Description
 * @property EgressAccessLogs|null $EgressAccessLogs
 * @property HlsIngest|null $HlsIngest
 * @property string|null $Id
 * @property IngressAccessLogs|null $IngressAccessLogs
 * @property array<string, string>|null $Tags
 */
class Channel extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     CreatedAt?: string|null,
     *     Description?: string|null,
     *     EgressAccessLogs?: EgressAccessLogs|null,
     *     HlsIngest?: HlsIngest|null,
     *     Id?: string|null,
     *     IngressAccessLogs?: IngressAccessLogs|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
