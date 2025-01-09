<?php

namespace Sunaoka\Aws\Structures\SsmSap\GetDatabase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationId
 * @property string $ComponentId
 * @property list<ApplicationCredential> $Credentials
 * @property string $DatabaseId
 * @property string $DatabaseName
 * @property 'SYSTEM'|'TENANT' $DatabaseType
 * @property string $Arn
 * @property 'RUNNING'|'STARTING'|'STOPPED'|'WARNING'|'UNKNOWN'|'ERROR' $Status
 * @property string $PrimaryHost
 * @property int $SQLPort
 * @property \Aws\Api\DateTimeResult $LastUpdated
 * @property list<string> $ConnectedComponentArns
 */
class Database extends Shape
{
    /**
     * @param array{
     *     ApplicationId?: string,
     *     ComponentId?: string,
     *     Credentials?: list<ApplicationCredential>,
     *     DatabaseId?: string,
     *     DatabaseName?: string,
     *     DatabaseType?: 'SYSTEM'|'TENANT',
     *     Arn?: string,
     *     Status?: 'RUNNING'|'STARTING'|'STOPPED'|'WARNING'|'UNKNOWN'|'ERROR',
     *     PrimaryHost?: string,
     *     SQLPort?: int,
     *     LastUpdated?: \Aws\Api\DateTimeResult,
     *     ConnectedComponentArns?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
