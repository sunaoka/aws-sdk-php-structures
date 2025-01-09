<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetInvalidation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DistributionId
 * @property string $Id
 */
class GetInvalidationRequest extends Request
{
    /**
     * @param array{
     *     DistributionId: string,
     *     Id: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
