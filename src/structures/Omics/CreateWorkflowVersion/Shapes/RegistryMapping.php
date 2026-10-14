<?php

namespace Sunaoka\Aws\Structures\Omics\CreateWorkflowVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $upstreamRegistryUrl
 * @property string $ecrRepositoryPrefix
 * @property string|null $upstreamRepositoryPrefix
 * @property string|null $ecrAccountId
 * @property string|null $credentialArn
 */
class RegistryMapping extends Shape
{
    /**
     * @param array{
     *     upstreamRegistryUrl: string,
     *     ecrRepositoryPrefix: string,
     *     upstreamRepositoryPrefix?: string|null,
     *     ecrAccountId?: string|null,
     *     credentialArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
