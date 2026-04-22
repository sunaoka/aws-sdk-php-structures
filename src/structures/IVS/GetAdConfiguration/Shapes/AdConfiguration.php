<?php

namespace Sunaoka\Aws\Structures\IVS\GetAdConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string|null $name
 * @property list<MediaTailorPlaybackConfiguration> $mediaTailorPlaybackConfigurations
 * @property array<string, string>|null $tags
 */
class AdConfiguration extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     name?: string|null,
     *     mediaTailorPlaybackConfigurations: list<MediaTailorPlaybackConfiguration>,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
