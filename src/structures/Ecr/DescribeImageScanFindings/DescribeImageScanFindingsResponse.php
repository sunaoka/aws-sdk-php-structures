<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeImageScanFindings;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $registryId
 * @property string $repositoryName
 * @property Shapes\ImageIdentifier $imageId
 * @property Shapes\ImageScanStatus $imageScanStatus
 * @property Shapes\ImageScanFindings $imageScanFindings
 * @property string $nextToken
 */
class DescribeImageScanFindingsResponse extends Response
{
}
