<?php

namespace Sunaoka\Aws\Structures\S3Control\DeleteMultiRegionAccessPoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $ClientToken
 * @property Shapes\DeleteMultiRegionAccessPointInput $Details
 */
class DeleteMultiRegionAccessPointRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     ClientToken: string,
     *     Details: Shapes\DeleteMultiRegionAccessPointInput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
