<?php

namespace Sunaoka\Aws\Structures\S3Control\GetStorageLensGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $AccountId
 */
class GetStorageLensGroupRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     AccountId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
