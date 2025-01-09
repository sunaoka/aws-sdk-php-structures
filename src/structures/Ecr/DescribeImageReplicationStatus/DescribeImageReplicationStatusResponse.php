<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeImageReplicationStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $repositoryName
 * @property Shapes\ImageIdentifier $imageId
 * @property list<Shapes\ImageReplicationStatus> $replicationStatuses
 */
class DescribeImageReplicationStatusResponse extends Response
{
}
