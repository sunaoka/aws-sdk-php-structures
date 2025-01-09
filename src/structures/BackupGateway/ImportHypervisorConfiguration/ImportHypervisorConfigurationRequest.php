<?php

namespace Sunaoka\Aws\Structures\BackupGateway\ImportHypervisorConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Host
 * @property string $KmsKeyArn
 * @property string $Name
 * @property string $Password
 * @property list<Shapes\Tag> $Tags
 * @property string $Username
 */
class ImportHypervisorConfigurationRequest extends Request
{
    /**
     * @param array{
     *     Host: string,
     *     KmsKeyArn?: string,
     *     Name: string,
     *     Password?: string,
     *     Tags?: list<Shapes\Tag>,
     *     Username?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
