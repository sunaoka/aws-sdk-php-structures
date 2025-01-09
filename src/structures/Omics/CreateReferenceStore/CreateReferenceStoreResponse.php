<?php

namespace Sunaoka\Aws\Structures\Omics\CreateReferenceStore;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $arn
 * @property string $name
 * @property string $description
 * @property Shapes\SseConfig $sseConfig
 * @property \Aws\Api\DateTimeResult $creationTime
 */
class CreateReferenceStoreResponse extends Response
{
}
