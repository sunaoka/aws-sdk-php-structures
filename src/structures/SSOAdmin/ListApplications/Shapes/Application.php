<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApplicationAccount
 * @property string|null $ApplicationArn
 * @property string|null $ApplicationProviderArn
 * @property \Aws\Api\DateTimeResult|null $CreatedDate
 * @property string|null $Description
 * @property string|null $InstanceArn
 * @property string|null $Name
 * @property PortalOptions|null $PortalOptions
 * @property 'ENABLED'|'DISABLED'|null $Status
 */
class Application extends Shape
{
    /**
     * @param array{
     *     ApplicationAccount?: string|null,
     *     ApplicationArn?: string|null,
     *     ApplicationProviderArn?: string|null,
     *     CreatedDate?: \Aws\Api\DateTimeResult|null,
     *     Description?: string|null,
     *     InstanceArn?: string|null,
     *     Name?: string|null,
     *     PortalOptions?: PortalOptions|null,
     *     Status?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
