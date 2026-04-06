<?php

namespace Sunaoka\Aws\Structures\Omics\GetWorkflowVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $upstreamRegistryUrl
 * @property string|null $ecrRepositoryPrefix
 * @property string|null $upstreamRepositoryPrefix
 * @property string|null $ecrAccountId
 */
class RegistryMapping extends Shape
{
    /**
     * @param array{
     *     upstreamRegistryUrl?: string|null,
     *     ecrRepositoryPrefix?: string|null,
     *     upstreamRepositoryPrefix?: string|null,
     *     ecrAccountId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
