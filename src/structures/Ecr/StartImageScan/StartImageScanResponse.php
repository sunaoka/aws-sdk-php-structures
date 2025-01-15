<?php

namespace Sunaoka\Aws\Structures\Ecr\StartImageScan;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $registryId
 * @property string|null $repositoryName
 * @property Shapes\ImageIdentifier|null $imageId
 * @property Shapes\ImageScanStatus|null $imageScanStatus
 */
class StartImageScanResponse extends Response
{
}
