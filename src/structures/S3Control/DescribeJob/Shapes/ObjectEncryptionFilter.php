<?php

namespace Sunaoka\Aws\Structures\S3Control\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SSES3Filter|null $SSES3
 * @property SSEKMSFilter|null $SSEKMS
 * @property DSSEKMSFilter|null $DSSEKMS
 * @property SSECFilter|null $SSEC
 * @property NotSSEFilter|null $NOTSSE
 */
class ObjectEncryptionFilter extends Shape
{
    /**
     * @param array{
     *     SSES3?: SSES3Filter|null,
     *     SSEKMS?: SSEKMSFilter|null,
     *     DSSEKMS?: DSSEKMSFilter|null,
     *     SSEC?: SSECFilter|null,
     *     NOTSSE?: NotSSEFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
