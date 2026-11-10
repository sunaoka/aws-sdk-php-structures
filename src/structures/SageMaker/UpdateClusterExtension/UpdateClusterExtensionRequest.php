<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateClusterExtension;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterArn
 * @property string $ExtensionArn
 * @property string|null $ExtensionVersion
 * @property string|null $ConfigurationValues
 * @property string|null $ClientToken
 */
class UpdateClusterExtensionRequest extends Request
{
    /**
     * @param array{
     *     ClusterArn: string,
     *     ExtensionArn: string,
     *     ExtensionVersion?: string|null,
     *     ConfigurationValues?: string|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
