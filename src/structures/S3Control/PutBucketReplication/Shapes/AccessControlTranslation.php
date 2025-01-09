<?php

namespace Sunaoka\Aws\Structures\S3Control\PutBucketReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Destination' $Owner
 */
class AccessControlTranslation extends Shape
{
    /**
     * @param array{Owner: 'Destination'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
