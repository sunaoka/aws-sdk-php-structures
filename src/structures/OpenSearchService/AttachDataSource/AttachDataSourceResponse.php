<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\AttachDataSource;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $attachmentId
 * @property string|null $id
 * @property string|null $arn
 * @property string|null $dataSourceArn
 * @property 'PENDING'|'ATTACHED'|'FAILED'|null $status
 */
class AttachDataSourceResponse extends Response
{
}
