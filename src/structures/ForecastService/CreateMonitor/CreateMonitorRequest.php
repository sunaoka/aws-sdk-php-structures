<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreateMonitor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MonitorName
 * @property string $ResourceArn
 * @property list<Shapes\Tag> $Tags
 */
class CreateMonitorRequest extends Request
{
    /**
     * @param array{
     *     MonitorName: string,
     *     ResourceArn: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
