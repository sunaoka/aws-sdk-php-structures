<?php

namespace Sunaoka\Aws\Structures\S3Control\DeleteAccessGrantsLocation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $AccessGrantsLocationId
 */
class DeleteAccessGrantsLocationRequest extends Request
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
