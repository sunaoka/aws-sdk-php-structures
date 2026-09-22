<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\GetAccessProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceId
 * @property string $profileId
 */
class GetAccessProfileRequest extends Request
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
