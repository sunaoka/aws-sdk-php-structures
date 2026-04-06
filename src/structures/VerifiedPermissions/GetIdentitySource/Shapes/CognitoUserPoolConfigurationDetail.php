<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\GetIdentitySource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $userPoolArn
 * @property list<string> $clientIds
 * @property string $issuer
 * @property CognitoGroupConfigurationDetail|null $groupConfiguration
 */
class CognitoUserPoolConfigurationDetail extends Shape
{
    /**
     * @param array{
     *     userPoolArn: string,
     *     clientIds: list<string>,
     *     issuer: string,
     *     groupConfiguration?: CognitoGroupConfigurationDetail|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
