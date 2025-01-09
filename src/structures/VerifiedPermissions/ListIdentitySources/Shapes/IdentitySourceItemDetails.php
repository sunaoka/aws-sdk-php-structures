<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\ListIdentitySources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $clientIds
 * @property string $userPoolArn
 * @property string $discoveryUrl
 * @property 'COGNITO' $openIdIssuer
 */
class IdentitySourceItemDetails extends Shape
{
    /**
     * @param array{
     *     clientIds?: list<string>,
     *     userPoolArn?: string,
     *     discoveryUrl?: string,
     *     openIdIssuer?: 'COGNITO'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
