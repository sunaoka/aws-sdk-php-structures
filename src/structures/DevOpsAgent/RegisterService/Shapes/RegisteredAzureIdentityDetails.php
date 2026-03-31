<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\RegisterService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $tenantId
 * @property string $clientId
 * @property string $webIdentityRoleArn
 * @property list<string> $webIdentityTokenAudiences
 */
class RegisteredAzureIdentityDetails extends Shape
{
    /**
     * @param array{
     *     tenantId: string,
     *     clientId: string,
     *     webIdentityRoleArn: string,
     *     webIdentityTokenAudiences: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
