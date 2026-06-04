<?php

namespace Sunaoka\Aws\Structures\IVS\UpdateAdConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property string|null $name
 * @property list<Shapes\MediaTailorPlaybackConfiguration>|null $mediaTailorPlaybackConfigurations
 */
class UpdateAdConfigurationRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     name?: string|null,
     *     mediaTailorPlaybackConfigurations?: list<Shapes\MediaTailorPlaybackConfiguration>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
