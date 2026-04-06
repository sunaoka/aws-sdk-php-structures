<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\UpdateIdentitySource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $userPoolArn
 * @property list<string>|null $clientIds
 * @property UpdateCognitoGroupConfiguration|null $groupConfiguration
 */
class UpdateCognitoUserPoolConfiguration extends Shape
{
    /**
     * @param array{
     *     userPoolArn: string,
     *     clientIds?: list<string>|null,
     *     groupConfiguration?: UpdateCognitoGroupConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
