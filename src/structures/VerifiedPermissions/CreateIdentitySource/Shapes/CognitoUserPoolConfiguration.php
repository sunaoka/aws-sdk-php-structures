<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\CreateIdentitySource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $userPoolArn
 * @property list<string>|null $clientIds
 */
class CognitoUserPoolConfiguration extends Shape
{
    /**
     * @param array{
     *     userPoolArn: string,
     *     clientIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
