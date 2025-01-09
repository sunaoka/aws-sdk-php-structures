<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DeleteEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ServiceAccessRoleArn
 * @property string $EndpointUri
 * @property int $FullLoadErrorPercentage
 * @property int $ErrorRetryDuration
 * @property bool $UseNewMappingType
 */
class ElasticsearchSettings extends Shape
{
    /**
     * @param array{
     *     ServiceAccessRoleArn: string,
     *     EndpointUri: string,
     *     FullLoadErrorPercentage?: int,
     *     ErrorRetryDuration?: int,
     *     UseNewMappingType?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
