<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateConfiguredTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'us-west-1'|'us-west-2'|'us-east-1'|'us-east-2'|'af-south-1'|'ap-east-1'|'ap-south-2'|'ap-southeast-1'|'ap-southeast-2'|'ap-southeast-3'|'ap-southeast-5'|'ap-southeast-4'|'ap-southeast-7'|'ap-south-1'|'ap-northeast-3'|'ap-northeast-1'|'ap-northeast-2'|'ca-central-1'|'ca-west-1'|'eu-south-1'|'eu-west-3'|'eu-south-2'|'eu-central-2'|'eu-central-1'|'eu-north-1'|'eu-west-1'|'eu-west-2'|'me-south-1'|'me-central-1'|'il-central-1'|'sa-east-1'|'mx-central-1'|'ap-east-2'|null $region
 * @property string $workGroup
 * @property string|null $outputLocation
 * @property string $databaseName
 * @property string $tableName
 */
class AthenaTableReference extends Shape
{
    /**
     * @param array{
     *     region?: 'us-west-1'|'us-west-2'|'us-east-1'|'us-east-2'|'af-south-1'|'ap-east-1'|'ap-south-2'|'ap-southeast-1'|'ap-southeast-2'|'ap-southeast-3'|'ap-southeast-5'|'ap-southeast-4'|'ap-southeast-7'|'ap-south-1'|'ap-northeast-3'|'ap-northeast-1'|'ap-northeast-2'|'ca-central-1'|'ca-west-1'|'eu-south-1'|'eu-west-3'|'eu-south-2'|'eu-central-2'|'eu-central-1'|'eu-north-1'|'eu-west-1'|'eu-west-2'|'me-south-1'|'me-central-1'|'il-central-1'|'sa-east-1'|'mx-central-1'|'ap-east-2'|null,
     *     workGroup: string,
     *     outputLocation?: string|null,
     *     databaseName: string,
     *     tableName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
