<?php

namespace Sunaoka\Aws\Structures\Omics\GetReferenceStore;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $arn
 * @property string|null $name
 * @property string|null $description
 * @property Shapes\SseConfig|null $sseConfig
 * @property \Aws\Api\DateTimeResult $creationTime
 */
class GetReferenceStoreResponse extends Response
{
}
