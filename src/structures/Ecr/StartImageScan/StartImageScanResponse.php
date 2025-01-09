<?php

namespace Sunaoka\Aws\Structures\Ecr\StartImageScan;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $registryId
 * @property string $repositoryName
 * @property Shapes\ImageIdentifier $imageId
 * @property Shapes\ImageScanStatus $imageScanStatus
 */
class StartImageScanResponse extends Response
{
}
