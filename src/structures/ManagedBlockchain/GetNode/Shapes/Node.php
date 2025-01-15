<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\GetNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NetworkId
 * @property string|null $MemberId
 * @property string|null $Id
 * @property string|null $InstanceType
 * @property string|null $AvailabilityZone
 * @property NodeFrameworkAttributes|null $FrameworkAttributes
 * @property NodeLogPublishingConfiguration|null $LogPublishingConfiguration
 * @property 'LevelDB'|'CouchDB'|null $StateDB
 * @property 'CREATING'|'AVAILABLE'|'UNHEALTHY'|'CREATE_FAILED'|'UPDATING'|'DELETING'|'DELETED'|'FAILED'|'INACCESSIBLE_ENCRYPTION_KEY'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property array<string, string>|null $Tags
 * @property string|null $Arn
 * @property string|null $KmsKeyArn
 */
class Node extends Shape
{
    /**
     * @param array{
     *     NetworkId?: string|null,
     *     MemberId?: string|null,
     *     Id?: string|null,
     *     InstanceType?: string|null,
     *     AvailabilityZone?: string|null,
     *     FrameworkAttributes?: NodeFrameworkAttributes|null,
     *     LogPublishingConfiguration?: NodeLogPublishingConfiguration|null,
     *     StateDB?: 'LevelDB'|'CouchDB'|null,
     *     Status?: 'CREATING'|'AVAILABLE'|'UNHEALTHY'|'CREATE_FAILED'|'UPDATING'|'DELETING'|'DELETED'|'FAILED'|'INACCESSIBLE_ENCRYPTION_KEY'|null,
     *     CreationDate?: \Aws\Api\DateTimeResult|null,
     *     Tags?: array<string, string>|null,
     *     Arn?: string|null,
     *     KmsKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
