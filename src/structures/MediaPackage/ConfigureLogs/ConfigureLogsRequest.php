<?php

namespace Sunaoka\Aws\Structures\MediaPackage\ConfigureLogs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\EgressAccessLogs $EgressAccessLogs
 * @property string $Id
 * @property Shapes\IngressAccessLogs $IngressAccessLogs
 */
class ConfigureLogsRequest extends Request
{
    /**
     * @param array{
     *     EgressAccessLogs?: Shapes\EgressAccessLogs,
     *     Id: string,
     *     IngressAccessLogs?: Shapes\IngressAccessLogs
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
