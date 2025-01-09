<?php

namespace Sunaoka\Aws\Structures\MediaPackage\ListChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $CreatedAt
 * @property string $Description
 * @property EgressAccessLogs $EgressAccessLogs
 * @property HlsIngest $HlsIngest
 * @property string $Id
 * @property IngressAccessLogs $IngressAccessLogs
 * @property array<string, string> $Tags
 */
class Channel extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     CreatedAt?: string,
     *     Description?: string,
     *     EgressAccessLogs?: EgressAccessLogs,
     *     HlsIngest?: HlsIngest,
     *     Id?: string,
     *     IngressAccessLogs?: IngressAccessLogs,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
