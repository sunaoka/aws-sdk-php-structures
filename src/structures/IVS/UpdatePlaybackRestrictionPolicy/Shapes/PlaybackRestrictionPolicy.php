<?php

namespace Sunaoka\Aws\Structures\IVS\UpdatePlaybackRestrictionPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $allowedCountries
 * @property list<string> $allowedOrigins
 * @property string $arn
 * @property bool $enableStrictOriginEnforcement
 * @property string $name
 * @property array<string, string> $tags
 */
class PlaybackRestrictionPolicy extends Shape
{
    /**
     * @param array{
     *     allowedCountries: list<string>,
     *     allowedOrigins: list<string>,
     *     arn: string,
     *     enableStrictOriginEnforcement?: bool,
     *     name?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
