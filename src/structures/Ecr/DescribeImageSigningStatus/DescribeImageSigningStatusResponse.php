<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeImageSigningStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $repositoryName
 * @property Shapes\ImageIdentifier|null $imageId
 * @property string|null $registryId
 * @property list<Shapes\ImageSigningStatus>|null $signingStatuses
 */
class DescribeImageSigningStatusResponse extends Response
{
}
