<?php

namespace Sunaoka\Aws\Structures\Ssm\ListDocumentMetadataHistory;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Name
 * @property string|null $DocumentVersion
 * @property string|null $Author
 * @property Shapes\DocumentMetadataResponseInfo|null $Metadata
 * @property string|null $NextToken
 */
class ListDocumentMetadataHistoryResponse extends Response
{
}
