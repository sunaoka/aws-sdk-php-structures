<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ModifyInstanceProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceProfileIdentifier
 * @property string|null $AvailabilityZone
 * @property string|null $KmsKeyArn
 * @property bool|null $PubliclyAccessible
 * @property string|null $NetworkType
 * @property string|null $InstanceProfileName
 * @property string|null $Description
 * @property string|null $SubnetGroupIdentifier
 * @property list<string>|null $VpcSecurityGroups
 */
class ModifyInstanceProfileRequest extends Request
{
    /**
     * @param array{
     *     InstanceProfileIdentifier: string,
     *     AvailabilityZone?: string|null,
     *     KmsKeyArn?: string|null,
     *     PubliclyAccessible?: bool|null,
     *     NetworkType?: string|null,
     *     InstanceProfileName?: string|null,
     *     Description?: string|null,
     *     SubnetGroupIdentifier?: string|null,
     *     VpcSecurityGroups?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
