<?php

namespace Sunaoka\Aws\Structures\Comprehend\StartDocumentClassificationJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $JobId
 * @property string|null $JobArn
 * @property 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'STOP_REQUESTED'|'STOPPED'|null $JobStatus
 * @property string|null $DocumentClassifierArn
 */
class StartDocumentClassificationJobResponse extends Response
{
}
