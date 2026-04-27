<?php

namespace Sunaoka\Aws\Structures\IVS\CreateAdConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $name
 * @property list<Shapes\MediaTailorPlaybackConfiguration> $mediaTailorPlaybackConfigurations
 * @property array<string, string>|null $tags
 */
class CreateAdConfigurationRequest extends Request
{
    /**
     * @param array{
     *     name?: string|null,
     *     mediaTailorPlaybackConfigurations: list<Shapes\MediaTailorPlaybackConfiguration>,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
