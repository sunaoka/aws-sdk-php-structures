<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\UpdateIdentitySource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $userPoolArn
 * @property list<string> $clientIds
 * @property UpdateCognitoGroupConfiguration $groupConfiguration
 */
class UpdateCognitoUserPoolConfiguration extends Shape
{
    /**
     * @param array{
     *     userPoolArn: string,
     *     clientIds?: list<string>,
     *     groupConfiguration?: UpdateCognitoGroupConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
