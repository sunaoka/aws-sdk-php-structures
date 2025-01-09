<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateMultiRegionAccessPoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $ClientToken
 * @property Shapes\CreateMultiRegionAccessPointInput $Details
 */
class CreateMultiRegionAccessPointRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     ClientToken: string,
     *     Details: Shapes\CreateMultiRegionAccessPointInput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
