<?php

namespace Sunaoka\Aws\Structures\S3Control\UpdateStorageLensGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $AccountId
 * @property Shapes\StorageLensGroup $StorageLensGroup
 */
class UpdateStorageLensGroupRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     AccountId: string,
     *     StorageLensGroup: Shapes\StorageLensGroup
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
