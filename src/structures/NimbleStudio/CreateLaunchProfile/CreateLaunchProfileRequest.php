<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\CreateLaunchProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string|null $description
 * @property list<string> $ec2SubnetIds
 * @property list<string> $launchProfileProtocolVersions
 * @property string $name
 * @property Shapes\StreamConfigurationCreate $streamConfiguration
 * @property list<string> $studioComponentIds
 * @property string $studioId
 * @property array<string, string>|null $tags
 */
class CreateLaunchProfileRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     description?: string|null,
     *     ec2SubnetIds: list<string>,
     *     launchProfileProtocolVersions: list<string>,
     *     name: string,
     *     streamConfiguration: Shapes\StreamConfigurationCreate,
     *     studioComponentIds: list<string>,
     *     studioId: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
