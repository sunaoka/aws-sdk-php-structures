<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CreateEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ServiceAccessRoleArn
 * @property string $EndpointUri
 * @property int|null $FullLoadErrorPercentage
 * @property int|null $ErrorRetryDuration
 * @property bool|null $UseNewMappingType
 */
class ElasticsearchSettings extends Shape
{
    /**
     * @param array{
     *     ServiceAccessRoleArn: string,
     *     EndpointUri: string,
     *     FullLoadErrorPercentage?: int|null,
     *     ErrorRetryDuration?: int|null,
     *     UseNewMappingType?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
