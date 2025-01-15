<?php

namespace Sunaoka\Aws\Structures\IVS\CreatePlaybackRestrictionPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $allowedCountries
 * @property list<string> $allowedOrigins
 * @property string $arn
 * @property bool|null $enableStrictOriginEnforcement
 * @property string|null $name
 * @property array<string, string>|null $tags
 */
class PlaybackRestrictionPolicy extends Shape
{
    /**
     * @param array{
     *     allowedCountries: list<string>,
     *     allowedOrigins: list<string>,
     *     arn: string,
     *     enableStrictOriginEnforcement?: bool|null,
     *     name?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
