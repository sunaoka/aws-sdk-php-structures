<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateInvalidation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DistributionId
 * @property Shapes\InvalidationBatch $InvalidationBatch
 */
class CreateInvalidationRequest extends Request
{
    /**
     * @param array{
     *     DistributionId: string,
     *     InvalidationBatch: Shapes\InvalidationBatch
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
