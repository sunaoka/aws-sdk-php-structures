<?php

namespace Sunaoka\Aws\Structures\Ssm\ListDocumentMetadataHistory;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Name
 * @property string $DocumentVersion
 * @property string $Author
 * @property Shapes\DocumentMetadataResponseInfo $Metadata
 * @property string $NextToken
 */
class ListDocumentMetadataHistoryResponse extends Response
{
}
