<?php

namespace Sunaoka\Aws\Structures\IVS\ListAdConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string|null $name
 * @property list<MediaTailorPlaybackConfiguration> $mediaTailorPlaybackConfigurations
 * @property PostRollConfiguration|null $postRollConfiguration
 * @property array<string, string>|null $tags
 */
class AdConfigurationSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     name?: string|null,
     *     mediaTailorPlaybackConfigurations: list<MediaTailorPlaybackConfiguration>,
     *     postRollConfiguration?: PostRollConfiguration|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
