<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\UpdateLaunchProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string|null $description
 * @property string $launchProfileId
 * @property list<string>|null $launchProfileProtocolVersions
 * @property string|null $name
 * @property Shapes\StreamConfigurationCreate|null $streamConfiguration
 * @property list<string>|null $studioComponentIds
 * @property string $studioId
 */
class UpdateLaunchProfileRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     description?: string|null,
     *     launchProfileId: string,
     *     launchProfileProtocolVersions?: list<string>|null,
     *     name?: string|null,
     *     streamConfiguration?: Shapes\StreamConfigurationCreate|null,
     *     studioComponentIds?: list<string>|null,
     *     studioId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
