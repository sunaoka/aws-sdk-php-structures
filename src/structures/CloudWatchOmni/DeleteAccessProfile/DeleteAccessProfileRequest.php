<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\DeleteAccessProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceId
 * @property string $profileId
 */
class DeleteAccessProfileRequest extends Request
{
    /**
     * @param array{
     *     spaceId: string,
     *     profileId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
