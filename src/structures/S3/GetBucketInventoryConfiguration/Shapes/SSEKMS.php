<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketInventoryConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KeyId
 */
class SSEKMS extends Shape
{
    /**
     * @param array{KeyId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
