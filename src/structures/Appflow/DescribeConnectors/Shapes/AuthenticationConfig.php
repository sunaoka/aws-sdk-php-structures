<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $isBasicAuthSupported
 * @property bool $isApiKeyAuthSupported
 * @property bool $isOAuth2Supported
 * @property bool $isCustomAuthSupported
 * @property OAuth2Defaults $oAuth2Defaults
 * @property list<CustomAuthConfig> $customAuthConfigs
 */
class AuthenticationConfig extends Shape
{
    /**
     * @param array{
     *     isBasicAuthSupported?: bool,
     *     isApiKeyAuthSupported?: bool,
     *     isOAuth2Supported?: bool,
     *     isCustomAuthSupported?: bool,
     *     oAuth2Defaults?: OAuth2Defaults,
     *     customAuthConfigs?: list<CustomAuthConfig>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
