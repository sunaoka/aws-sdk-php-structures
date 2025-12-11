<?php

namespace Sunaoka\Aws\Structures\Appstream\StartSoftwareDeploymentToImageBuilder;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ImageBuilderName
 * @property bool|null $RetryFailedDeployments
 */
class StartSoftwareDeploymentToImageBuilderRequest extends Request
{
    /**
     * @param array{
     *     ImageBuilderName: string,
     *     RetryFailedDeployments?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
