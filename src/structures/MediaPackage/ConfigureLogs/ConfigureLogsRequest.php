<?php

namespace Sunaoka\Aws\Structures\MediaPackage\ConfigureLogs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\EgressAccessLogs|null $EgressAccessLogs
 * @property string $Id
 * @property Shapes\IngressAccessLogs|null $IngressAccessLogs
 */
class ConfigureLogsRequest extends Request
{
    /**
     * @param array{
     *     EgressAccessLogs?: Shapes\EgressAccessLogs|null,
     *     Id: string,
     *     IngressAccessLogs?: Shapes\IngressAccessLogs|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
