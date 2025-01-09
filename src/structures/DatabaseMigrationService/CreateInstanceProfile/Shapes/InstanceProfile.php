<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CreateInstanceProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceProfileArn
 * @property string $AvailabilityZone
 * @property string $KmsKeyArn
 * @property bool $PubliclyAccessible
 * @property string $NetworkType
 * @property string $InstanceProfileName
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $InstanceProfileCreationTime
 * @property string $SubnetGroupIdentifier
 * @property list<string> $VpcSecurityGroups
 */
class InstanceProfile extends Shape
{
    /**
     * @param array{
     *     InstanceProfileArn?: string,
     *     AvailabilityZone?: string,
     *     KmsKeyArn?: string,
     *     PubliclyAccessible?: bool,
     *     NetworkType?: string,
     *     InstanceProfileName?: string,
     *     Description?: string,
     *     InstanceProfileCreationTime?: \Aws\Api\DateTimeResult,
     *     SubnetGroupIdentifier?: string,
     *     VpcSecurityGroups?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
