<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SELF_SIGNED'|'VERIFY_AUTHENTICITY'|null $CertificateMode
 * @property int|null $ConnectionRetryInterval
 * @property OutputLocationRef $Destination
 * @property int|null $NumRetries
 */
class RtmpOutputSettings extends Shape
{
    /**
     * @param array{
     *     CertificateMode?: 'SELF_SIGNED'|'VERIFY_AUTHENTICITY'|null,
     *     ConnectionRetryInterval?: int|null,
     *     Destination: OutputLocationRef,
     *     NumRetries?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
