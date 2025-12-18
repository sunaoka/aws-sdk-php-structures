<?php

namespace Sunaoka\Aws\Structures\SsmSap\GetDatabase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApplicationId
 * @property string|null $ComponentId
 * @property list<ApplicationCredential>|null $Credentials
 * @property string|null $DatabaseId
 * @property string|null $DatabaseName
 * @property 'SYSTEM'|'TENANT'|null $DatabaseType
 * @property string|null $Arn
 * @property 'RUNNING'|'STARTING'|'STOPPED'|'WARNING'|'UNKNOWN'|'ERROR'|'STOPPING'|null $Status
 * @property string|null $PrimaryHost
 * @property int|null $SQLPort
 * @property \Aws\Api\DateTimeResult|null $LastUpdated
 * @property list<string>|null $ConnectedComponentArns
 */
class Database extends Shape
{
    /**
     * @param array{
     *     ApplicationId?: string|null,
     *     ComponentId?: string|null,
     *     Credentials?: list<ApplicationCredential>|null,
     *     DatabaseId?: string|null,
     *     DatabaseName?: string|null,
     *     DatabaseType?: 'SYSTEM'|'TENANT'|null,
     *     Arn?: string|null,
     *     Status?: 'RUNNING'|'STARTING'|'STOPPED'|'WARNING'|'UNKNOWN'|'ERROR'|'STOPPING'|null,
     *     PrimaryHost?: string|null,
     *     SQLPort?: int|null,
     *     LastUpdated?: \Aws\Api\DateTimeResult|null,
     *     ConnectedComponentArns?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
