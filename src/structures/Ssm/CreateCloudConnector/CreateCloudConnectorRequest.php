<?php

namespace Sunaoka\Aws\Structures\Ssm\CreateCloudConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DisplayName
 * @property string $RoleArn
 * @property string|null $Description
 * @property Shapes\CloudConnectorConfiguration $Configuration
 * @property string $ConfigConnectorArn
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateCloudConnectorRequest extends Request
{
    /**
     * @param array{
     *     DisplayName: string,
     *     RoleArn: string,
     *     Description?: string|null,
     *     Configuration: Shapes\CloudConnectorConfiguration,
     *     ConfigConnectorArn: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
