<?php

namespace Sunaoka\Aws\Structures\Textract\GetDocumentInsights;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'PARTIAL_SUCCESS' $Status
 * @property Shapes\OutputConfiguration|null $OutputConfiguration
 * @property string|null $ErrorType
 * @property string|null $ErrorMessage
 */
class GetDocumentInsightsResponse extends Response
{
}
