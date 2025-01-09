<?php

namespace Sunaoka\Aws\Structures\IVS\UpdatePlaybackRestrictionPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $allowedCountries
 * @property list<string> $allowedOrigins
 * @property string $arn
 * @property bool $enableStrictOriginEnforcement
 * @property string $name
 */
class UpdatePlaybackRestrictionPolicyRequest extends Request
{
    /**
     * @param array{
     *     allowedCountries?: list<string>,
     *     allowedOrigins?: list<string>,
     *     arn: string,
     *     enableStrictOriginEnforcement?: bool,
     *     name?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
