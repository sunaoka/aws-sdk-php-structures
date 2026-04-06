<?php

namespace Sunaoka\Aws\Structures\S3Control\GetAccessGrantsLocation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $AccessGrantsLocationId
 */
class GetAccessGrantsLocationRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     AccessGrantsLocationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
