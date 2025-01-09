<?php

namespace Sunaoka\Aws\Structures\ECRPublic\UploadLayerPart;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $registryId
 * @property string $repositoryName
 * @property string $uploadId
 * @property int<0, max> $lastByteReceived
 */
class UploadLayerPartResponse extends Response
{
}
