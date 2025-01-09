<?php

namespace Sunaoka\Aws\Structures\S3Control\DeleteStorageLensGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $AccountId
 */
class DeleteStorageLensGroupRequest extends Request
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
