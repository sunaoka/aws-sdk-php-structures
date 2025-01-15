<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CreateInstanceProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AvailabilityZone
 * @property string|null $KmsKeyArn
 * @property bool|null $PubliclyAccessible
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $NetworkType
 * @property string|null $InstanceProfileName
 * @property string|null $Description
 * @property string|null $SubnetGroupIdentifier
 * @property list<string>|null $VpcSecurityGroups
 */
class CreateInstanceProfileRequest extends Request
{
    /**
     * @param array{
     *     AvailabilityZone?: string|null,
     *     KmsKeyArn?: string|null,
     *     PubliclyAccessible?: bool|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     NetworkType?: string|null,
     *     InstanceProfileName?: string|null,
     *     Description?: string|null,
     *     SubnetGroupIdentifier?: string|null,
     *     VpcSecurityGroups?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
