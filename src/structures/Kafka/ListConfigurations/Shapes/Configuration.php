<?php

namespace Sunaoka\Aws\Structures\Kafka\ListConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $Description
 * @property list<string> $KafkaVersions
 * @property ConfigurationRevision $LatestRevision
 * @property string $Name
 * @property 'ACTIVE'|'DELETING'|'DELETE_FAILED' $State
 */
class Configuration extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     Description: string,
     *     KafkaVersions: list<string>,
     *     LatestRevision: ConfigurationRevision,
     *     Name: string,
     *     State: 'ACTIVE'|'DELETING'|'DELETE_FAILED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
