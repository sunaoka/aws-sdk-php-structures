<?php

namespace Sunaoka\Aws\Structures\Ecr\StartImageScan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $registryId
 * @property string $repositoryName
 * @property Shapes\ImageIdentifier $imageId
 */
class StartImageScanRequest extends Request
{
    /**
     * @param array{
     *     registryId?: string,
     *     repositoryName: string,
     *     imageId: Shapes\ImageIdentifier
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
