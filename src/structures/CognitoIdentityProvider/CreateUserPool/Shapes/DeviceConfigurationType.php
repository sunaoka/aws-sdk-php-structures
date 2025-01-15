<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateUserPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $ChallengeRequiredOnNewDevice
 * @property bool|null $DeviceOnlyRememberedOnUserPrompt
 */
class DeviceConfigurationType extends Shape
{
    /**
     * @param array{
     *     ChallengeRequiredOnNewDevice?: bool|null,
     *     DeviceOnlyRememberedOnUserPrompt?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
