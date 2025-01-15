<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\ListIdentitySources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $userPoolArn
 * @property list<string> $clientIds
 * @property string $issuer
 * @property CognitoGroupConfigurationItem|null $groupConfiguration
 */
class CognitoUserPoolConfigurationItem extends Shape
{
    /**
     * @param array{
     *     userPoolArn: string,
     *     clientIds: list<string>,
     *     issuer: string,
     *     groupConfiguration?: CognitoGroupConfigurationItem|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
