<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\DeleteDbCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $dbClusterId
 * @property bool|null $retainAutomatedBackups
 */
class DeleteDbClusterRequest extends Request
{
    /**
     * @param array{
     *     dbClusterId: string,
     *     retainAutomatedBackups?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
