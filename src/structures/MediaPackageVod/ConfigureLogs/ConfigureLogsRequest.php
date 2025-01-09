<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\ConfigureLogs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\EgressAccessLogs $EgressAccessLogs
 * @property string $Id
 */
class ConfigureLogsRequest extends Request
{
    /**
     * @param array{
     *     EgressAccessLogs?: Shapes\EgressAccessLogs,
     *     Id: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
