<?php

namespace Sunaoka\Aws\Structures\BackupGateway\ImportHypervisorConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Host
 * @property string|null $Username
 * @property string|null $Password
 * @property string|null $KmsKeyArn
 * @property list<Shapes\Tag>|null $Tags
 */
class ImportHypervisorConfigurationRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Host: string,
     *     Username?: string|null,
     *     Password?: string|null,
     *     KmsKeyArn?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
