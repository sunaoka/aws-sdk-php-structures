<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\GetLaunchProfileInitialization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $launchProfileId
 * @property list<string> $launchProfileProtocolVersions
 * @property string $launchPurpose
 * @property string $platform
 * @property string $studioId
 */
class GetLaunchProfileInitializationRequest extends Request
{
    /**
     * @param array{
     *     launchProfileId: string,
     *     launchProfileProtocolVersions: list<string>,
     *     launchPurpose: string,
     *     platform: string,
     *     studioId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
