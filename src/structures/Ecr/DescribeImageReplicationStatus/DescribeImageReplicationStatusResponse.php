<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeImageReplicationStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $repositoryName
 * @property Shapes\ImageIdentifier|null $imageId
 * @property list<Shapes\ImageReplicationStatus>|null $replicationStatuses
 */
class DescribeImageReplicationStatusResponse extends Response
{
}
