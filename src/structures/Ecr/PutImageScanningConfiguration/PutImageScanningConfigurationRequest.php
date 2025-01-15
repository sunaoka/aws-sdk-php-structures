<?php

namespace Sunaoka\Aws\Structures\Ecr\PutImageScanningConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $registryId
 * @property string $repositoryName
 * @property Shapes\ImageScanningConfiguration $imageScanningConfiguration
 */
class PutImageScanningConfigurationRequest extends Request
{
    /**
     * @param array{
     *     registryId?: string|null,
     *     repositoryName: string,
     *     imageScanningConfiguration: Shapes\ImageScanningConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
