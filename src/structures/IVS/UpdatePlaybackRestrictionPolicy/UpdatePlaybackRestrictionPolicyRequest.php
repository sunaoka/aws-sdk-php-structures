<?php

namespace Sunaoka\Aws\Structures\IVS\UpdatePlaybackRestrictionPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property list<string>|null $allowedCountries
 * @property list<string>|null $allowedOrigins
 * @property bool|null $enableStrictOriginEnforcement
 * @property string|null $name
 */
class UpdatePlaybackRestrictionPolicyRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     allowedCountries?: list<string>|null,
     *     allowedOrigins?: list<string>|null,
     *     enableStrictOriginEnforcement?: bool|null,
     *     name?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
