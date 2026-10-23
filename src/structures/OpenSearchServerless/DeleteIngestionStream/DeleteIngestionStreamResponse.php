<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\DeleteIngestionStream;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ingestionStreamId
 * @property string|null $collectionId
 * @property string|null $ingestionStreamName
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'DELETED'|'CREATE_FAILED'|'DELETE_FAILED'|null $status
 */
class DeleteIngestionStreamResponse extends Response
{
}
