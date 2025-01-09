<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ModifyInstanceProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceProfileIdentifier
 * @property string $AvailabilityZone
 * @property string $KmsKeyArn
 * @property bool $PubliclyAccessible
 * @property string $NetworkType
 * @property string $InstanceProfileName
 * @property string $Description
 * @property string $SubnetGroupIdentifier
 * @property list<string> $VpcSecurityGroups
 */
class ModifyInstanceProfileRequest extends Request
{
    /**
     * @param array{
     *     InstanceProfileIdentifier: string,
     *     AvailabilityZone?: string,
     *     KmsKeyArn?: string,
     *     PubliclyAccessible?: bool,
     *     NetworkType?: string,
     *     InstanceProfileName?: string,
     *     Description?: string,
     *     SubnetGroupIdentifier?: string,
     *     VpcSecurityGroups?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
