<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateClusterExtension;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterArn
 * @property string $ExtensionName
 * @property string|null $ExtensionVersion
 * @property string|null $ConfigurationValues
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $ClientToken
 */
class CreateClusterExtensionRequest extends Request
{
    /**
     * @param array{
     *     ClusterArn: string,
     *     ExtensionName: string,
     *     ExtensionVersion?: string|null,
     *     ConfigurationValues?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
