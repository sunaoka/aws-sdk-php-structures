<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketInventoryConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SSES3 $SSES3
 * @property SSEKMS $SSEKMS
 */
class InventoryEncryption extends Shape
{
    /**
     * @param array{
     *     SSES3?: SSES3,
     *     SSEKMS?: SSEKMS
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
