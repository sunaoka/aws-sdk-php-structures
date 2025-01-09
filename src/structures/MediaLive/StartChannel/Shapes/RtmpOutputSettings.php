<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SELF_SIGNED'|'VERIFY_AUTHENTICITY' $CertificateMode
 * @property int<1, max> $ConnectionRetryInterval
 * @property OutputLocationRef $Destination
 * @property int<0, max> $NumRetries
 */
class RtmpOutputSettings extends Shape
{
    /**
     * @param array{
     *     CertificateMode?: 'SELF_SIGNED'|'VERIFY_AUTHENTICITY',
     *     ConnectionRetryInterval?: int<1, max>,
     *     Destination: OutputLocationRef,
     *     NumRetries?: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
