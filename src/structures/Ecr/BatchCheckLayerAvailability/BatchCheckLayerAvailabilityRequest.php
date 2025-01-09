<?php

namespace Sunaoka\Aws\Structures\Ecr\BatchCheckLayerAvailability;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $registryId
 * @property string $repositoryName
 * @property list<string> $layerDigests
 */
class BatchCheckLayerAvailabilityRequest extends Request
{
    /**
     * @param array{
     *     registryId?: string,
     *     repositoryName: string,
     *     layerDigests: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
