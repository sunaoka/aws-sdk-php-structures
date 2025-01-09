<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketRequestPayment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Requester'|'BucketOwner' $Payer
 */
class RequestPaymentConfiguration extends Shape
{
    /**
     * @param array{Payer: 'Requester'|'BucketOwner'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
