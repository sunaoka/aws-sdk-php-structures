<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $isBasicAuthSupported
 * @property bool|null $isApiKeyAuthSupported
 * @property bool|null $isOAuth2Supported
 * @property bool|null $isCustomAuthSupported
 * @property OAuth2Defaults|null $oAuth2Defaults
 * @property list<CustomAuthConfig>|null $customAuthConfigs
 */
class AuthenticationConfig extends Shape
{
    /**
     * @param array{
     *     isBasicAuthSupported?: bool|null,
     *     isApiKeyAuthSupported?: bool|null,
     *     isOAuth2Supported?: bool|null,
     *     isCustomAuthSupported?: bool|null,
     *     oAuth2Defaults?: OAuth2Defaults|null,
     *     customAuthConfigs?: list<CustomAuthConfig>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
