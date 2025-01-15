<?php

namespace Sunaoka\Aws\Structures\BackupGateway\ImportHypervisorConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Host
 * @property string|null $KmsKeyArn
 * @property string $Name
 * @property string|null $Password
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $Username
 */
class ImportHypervisorConfigurationRequest extends Request
{
    /**
     * @param array{
     *     Host: string,
     *     KmsKeyArn?: string|null,
     *     Name: string,
     *     Password?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     Username?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
