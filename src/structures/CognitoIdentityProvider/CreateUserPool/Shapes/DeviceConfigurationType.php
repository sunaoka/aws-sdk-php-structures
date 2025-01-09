<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateUserPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $ChallengeRequiredOnNewDevice
 * @property bool $DeviceOnlyRememberedOnUserPrompt
 */
class DeviceConfigurationType extends Shape
{
    /**
     * @param array{
     *     ChallengeRequiredOnNewDevice?: bool,
     *     DeviceOnlyRememberedOnUserPrompt?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
