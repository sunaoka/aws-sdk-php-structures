<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationAccount
 * @property string $ApplicationArn
 * @property string $ApplicationProviderArn
 * @property \Aws\Api\DateTimeResult $CreatedDate
 * @property string $Description
 * @property string $InstanceArn
 * @property string $Name
 * @property PortalOptions $PortalOptions
 * @property 'ENABLED'|'DISABLED' $Status
 */
class Application extends Shape
{
    /**
     * @param array{
     *     ApplicationAccount?: string,
     *     ApplicationArn?: string,
     *     ApplicationProviderArn?: string,
     *     CreatedDate?: \Aws\Api\DateTimeResult,
     *     Description?: string,
     *     InstanceArn?: string,
     *     Name?: string,
     *     PortalOptions?: PortalOptions,
     *     Status?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
