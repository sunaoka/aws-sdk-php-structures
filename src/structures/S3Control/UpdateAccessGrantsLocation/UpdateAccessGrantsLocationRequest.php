<?php

namespace Sunaoka\Aws\Structures\S3Control\UpdateAccessGrantsLocation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $AccessGrantsLocationId
 * @property string $IAMRoleArn
 */
class UpdateAccessGrantsLocationRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     AccessGrantsLocationId: string,
     *     IAMRoleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
