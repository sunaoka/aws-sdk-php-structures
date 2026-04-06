<?php

namespace Sunaoka\Aws\Structures\Keyspaces\GetTableAutoScalingSettings;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $keyspaceName
 * @property string $tableName
 * @property string $resourceArn
 * @property Shapes\AutoScalingSpecification|null $autoScalingSpecification
 * @property list<Shapes\ReplicaAutoScalingSpecification>|null $replicaSpecifications
 */
class GetTableAutoScalingSettingsResponse extends Response
{
}
