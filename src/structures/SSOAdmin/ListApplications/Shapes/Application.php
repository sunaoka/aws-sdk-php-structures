<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApplicationArn
 * @property string|null $ApplicationProviderArn
 * @property string|null $Name
 * @property string|null $ApplicationAccount
 * @property string|null $InstanceArn
 * @property 'ENABLED'|'DISABLED'|null $Status
 * @property PortalOptions|null $PortalOptions
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $CreatedDate
 */
class Application extends Shape
{
    /**
     * @param array{
     *     ApplicationArn?: string|null,
     *     ApplicationProviderArn?: string|null,
     *     Name?: string|null,
     *     ApplicationAccount?: string|null,
     *     InstanceArn?: string|null,
     *     Status?: 'ENABLED'|'DISABLED'|null,
     *     PortalOptions?: PortalOptions|null,
     *     Description?: string|null,
     *     CreatedDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
