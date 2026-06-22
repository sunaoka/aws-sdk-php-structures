<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\GetMicrovmImage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $imageArn
 * @property string $name
 * @property 'CREATING'|'CREATED'|'CREATE_FAILED'|'UPDATING'|'UPDATED'|'UPDATE_FAILED'|'DELETING'|'DELETE_FAILED'|'DELETED' $state
 * @property string|null $latestActiveImageVersion
 * @property string|null $latestFailedImageVersion
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property array<string, string>|null $tags
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class GetMicrovmImageResponse extends Response
{
}
