<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CreateInstanceProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AvailabilityZone
 * @property string $KmsKeyArn
 * @property bool $PubliclyAccessible
 * @property list<Shapes\Tag> $Tags
 * @property string $NetworkType
 * @property string $InstanceProfileName
 * @property string $Description
 * @property string $SubnetGroupIdentifier
 * @property list<string> $VpcSecurityGroups
 */
class CreateInstanceProfileRequest extends Request
{
    /**
     * @param array{
     *     AvailabilityZone?: string,
     *     KmsKeyArn?: string,
     *     PubliclyAccessible?: bool,
     *     Tags?: list<Shapes\Tag>,
     *     NetworkType?: string,
     *     InstanceProfileName?: string,
     *     Description?: string,
     *     SubnetGroupIdentifier?: string,
     *     VpcSecurityGroups?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
