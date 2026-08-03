<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\DeleteDbInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 * @property bool|null $retainAutomatedBackups
 */
class DeleteDbInstanceRequest extends Request
{
    /**
     * @param array{
     *     identifier: string,
     *     retainAutomatedBackups?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
