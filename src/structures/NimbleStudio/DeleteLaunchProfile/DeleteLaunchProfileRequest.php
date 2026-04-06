<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\DeleteLaunchProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $launchProfileId
 * @property string $studioId
 */
class DeleteLaunchProfileRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     launchProfileId: string,
     *     studioId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
