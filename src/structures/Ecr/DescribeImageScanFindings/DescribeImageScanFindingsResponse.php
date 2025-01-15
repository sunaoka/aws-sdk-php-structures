<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeImageScanFindings;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $registryId
 * @property string|null $repositoryName
 * @property Shapes\ImageIdentifier|null $imageId
 * @property Shapes\ImageScanStatus|null $imageScanStatus
 * @property Shapes\ImageScanFindings|null $imageScanFindings
 * @property string|null $nextToken
 */
class DescribeImageScanFindingsResponse extends Response
{
}
