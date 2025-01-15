<?php

namespace Sunaoka\Aws\Structures\ECRPublic\UploadLayerPart;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $registryId
 * @property string|null $repositoryName
 * @property string|null $uploadId
 * @property int<0, max>|null $lastByteReceived
 */
class UploadLayerPartResponse extends Response
{
}
