<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetConfiguredAudienceModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AudienceDestination $destination
 * @property string $roleArn
 */
class ConfiguredAudienceModelOutputConfig extends Shape
{
    /**
     * @param array{
     *     destination: AudienceDestination,
     *     roleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
