<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DeleteInstanceProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceProfileArn
 * @property string|null $AvailabilityZone
 * @property string|null $KmsKeyArn
 * @property bool|null $PubliclyAccessible
 * @property string|null $NetworkType
 * @property string|null $InstanceProfileName
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $InstanceProfileCreationTime
 * @property string|null $SubnetGroupIdentifier
 * @property list<string>|null $VpcSecurityGroups
 */
class InstanceProfile extends Shape
{
    /**
     * @param array{
     *     InstanceProfileArn?: string|null,
     *     AvailabilityZone?: string|null,
     *     KmsKeyArn?: string|null,
     *     PubliclyAccessible?: bool|null,
     *     NetworkType?: string|null,
     *     InstanceProfileName?: string|null,
     *     Description?: string|null,
     *     InstanceProfileCreationTime?: \Aws\Api\DateTimeResult|null,
     *     SubnetGroupIdentifier?: string|null,
     *     VpcSecurityGroups?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
