<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\GetNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NetworkId
 * @property string $MemberId
 * @property string $Id
 * @property string $InstanceType
 * @property string $AvailabilityZone
 * @property NodeFrameworkAttributes $FrameworkAttributes
 * @property NodeLogPublishingConfiguration $LogPublishingConfiguration
 * @property 'LevelDB'|'CouchDB' $StateDB
 * @property 'CREATING'|'AVAILABLE'|'UNHEALTHY'|'CREATE_FAILED'|'UPDATING'|'DELETING'|'DELETED'|'FAILED'|'INACCESSIBLE_ENCRYPTION_KEY' $Status
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property array<string, string> $Tags
 * @property string $Arn
 * @property string $KmsKeyArn
 */
class Node extends Shape
{
    /**
     * @param array{
     *     NetworkId?: string,
     *     MemberId?: string,
     *     Id?: string,
     *     InstanceType?: string,
     *     AvailabilityZone?: string,
     *     FrameworkAttributes?: NodeFrameworkAttributes,
     *     LogPublishingConfiguration?: NodeLogPublishingConfiguration,
     *     StateDB?: 'LevelDB'|'CouchDB',
     *     Status?: 'CREATING'|'AVAILABLE'|'UNHEALTHY'|'CREATE_FAILED'|'UPDATING'|'DELETING'|'DELETED'|'FAILED'|'INACCESSIBLE_ENCRYPTION_KEY',
     *     CreationDate?: \Aws\Api\DateTimeResult,
     *     Tags?: array<string, string>,
     *     Arn?: string,
     *     KmsKeyArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
