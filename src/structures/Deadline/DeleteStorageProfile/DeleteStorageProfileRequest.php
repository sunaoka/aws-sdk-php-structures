<?php

namespace Sunaoka\Aws\Structures\Deadline\DeleteStorageProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $storageProfileId
 */
class DeleteStorageProfileRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     storageProfileId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
