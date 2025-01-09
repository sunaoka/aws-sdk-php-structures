<?php

namespace Sunaoka\Aws\Structures\SecurityIR\CloseCase;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'Submitted'|'Acknowledged'|'Detection and Analysis'|'Containment, Eradication and Recovery'|'Post-incident Activities'|'Ready to Close'|'Closed' $caseStatus
 * @property \Aws\Api\DateTimeResult $closedDate
 */
class CloseCaseResponse extends Response
{
}
