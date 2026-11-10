<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteClusterExtension;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterArn
 * @property string $ExtensionArn
 */
class DeleteClusterExtensionRequest extends Request
{
    /**
     * @param array{
     *     ClusterArn: string,
     *     ExtensionArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
