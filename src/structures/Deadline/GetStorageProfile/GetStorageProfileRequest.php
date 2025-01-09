<?php

namespace Sunaoka\Aws\Structures\Deadline\GetStorageProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $storageProfileId
 */
class GetStorageProfileRequest extends Request
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
