<?php

namespace Sunaoka\Aws\Structures\SsmSap\StopApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property 'DBMS' $StopConnectedEntity
 * @property bool $IncludeEc2InstanceShutdown
 */
class StopApplicationRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     StopConnectedEntity?: 'DBMS',
     *     IncludeEc2InstanceShutdown?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
