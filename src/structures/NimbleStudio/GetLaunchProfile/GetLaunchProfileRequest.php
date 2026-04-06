<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\GetLaunchProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $launchProfileId
 * @property string $studioId
 */
class GetLaunchProfileRequest extends Request
{
    /**
     * @param array{
     *     launchProfileId: string,
     *     studioId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
