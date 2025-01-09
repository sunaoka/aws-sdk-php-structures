<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannelClass\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SELF_SIGNED'|'VERIFY_AUTHENTICITY' $CertificateMode
 * @property int $ConnectionRetryInterval
 * @property OutputLocationRef $Destination
 * @property int $NumRetries
 */
class RtmpOutputSettings extends Shape
{
    /**
     * @param array{
     *     CertificateMode?: 'SELF_SIGNED'|'VERIFY_AUTHENTICITY',
     *     ConnectionRetryInterval?: int,
     *     Destination: OutputLocationRef,
     *     NumRetries?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
