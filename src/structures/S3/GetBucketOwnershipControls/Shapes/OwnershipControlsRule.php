<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketOwnershipControls\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BucketOwnerPreferred'|'ObjectWriter'|'BucketOwnerEnforced' $ObjectOwnership
 */
class OwnershipControlsRule extends Shape
{
    /**
     * @param array{ObjectOwnership: 'BucketOwnerPreferred'|'ObjectWriter'|'BucketOwnerEnforced'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
