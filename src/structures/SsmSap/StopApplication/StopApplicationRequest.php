<?php

namespace Sunaoka\Aws\Structures\SsmSap\StopApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property 'DBMS'|null $StopConnectedEntity
 * @property bool|null $IncludeEc2InstanceShutdown
 */
class StopApplicationRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     StopConnectedEntity?: 'DBMS'|null,
     *     IncludeEc2InstanceShutdown?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
