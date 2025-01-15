<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreateMonitor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MonitorName
 * @property string $ResourceArn
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateMonitorRequest extends Request
{
    /**
     * @param array{
     *     MonitorName: string,
     *     ResourceArn: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
