<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\UpdateAccessProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceId
 * @property string $profileId
 * @property string|null $name
 * @property string|null $description
 */
class UpdateAccessProfileRequest extends Request
{
    /**
     * @param array{
     *     spaceId: string,
     *     profileId: string,
     *     name?: string|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
