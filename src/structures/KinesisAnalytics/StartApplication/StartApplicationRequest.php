<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\StartApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property list<Shapes\InputConfiguration> $InputConfigurations
 */
class StartApplicationRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     InputConfigurations: list<Shapes\InputConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
