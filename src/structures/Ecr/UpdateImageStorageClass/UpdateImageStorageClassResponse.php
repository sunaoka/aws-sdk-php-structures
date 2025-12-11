<?php

namespace Sunaoka\Aws\Structures\Ecr\UpdateImageStorageClass;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $registryId
 * @property string|null $repositoryName
 * @property Shapes\ImageIdentifier|null $imageId
 * @property 'ACTIVE'|'ARCHIVED'|'ACTIVATING'|null $imageStatus
 */
class UpdateImageStorageClassResponse extends Response
{
}
