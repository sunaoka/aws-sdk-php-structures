<?php

namespace Sunaoka\Aws\Structures\IVS\CreatePlaybackRestrictionPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $allowedCountries
 * @property list<string>|null $allowedOrigins
 * @property bool|null $enableStrictOriginEnforcement
 * @property string|null $name
 * @property array<string, string>|null $tags
 */
class CreatePlaybackRestrictionPolicyRequest extends Request
{
    /**
     * @param array{
     *     allowedCountries?: list<string>|null,
     *     allowedOrigins?: list<string>|null,
     *     enableStrictOriginEnforcement?: bool|null,
     *     name?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
