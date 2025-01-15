<?php

namespace Sunaoka\Aws\Structures\ECRPublic\BatchDeleteImage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\ImageIdentifier>|null $imageIds
 * @property list<Shapes\ImageFailure>|null $failures
 */
class BatchDeleteImageResponse extends Response
{
}
