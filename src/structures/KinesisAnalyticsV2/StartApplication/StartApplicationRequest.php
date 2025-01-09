<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\StartApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property Shapes\RunConfiguration $RunConfiguration
 */
class StartApplicationRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     RunConfiguration?: Shapes\RunConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
