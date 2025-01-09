<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateHsmConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HsmConfigurationIdentifier
 * @property string $Description
 * @property string $HsmIpAddress
 * @property string $HsmPartitionName
 * @property string $HsmPartitionPassword
 * @property string $HsmServerPublicCertificate
 * @property list<Shapes\Tag> $Tags
 */
class CreateHsmConfigurationRequest extends Request
{
    /**
     * @param array{
     *     HsmConfigurationIdentifier: string,
     *     Description: string,
     *     HsmIpAddress: string,
     *     HsmPartitionName: string,
     *     HsmPartitionPassword: string,
     *     HsmServerPublicCertificate: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
