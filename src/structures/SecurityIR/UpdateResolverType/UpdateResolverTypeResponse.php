<?php

namespace Sunaoka\Aws\Structures\SecurityIR\UpdateResolverType;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $caseId
 * @property 'Submitted'|'Acknowledged'|'Detection and Analysis'|'Containment, Eradication and Recovery'|'Post-incident Activities'|'Ready to Close'|'Closed' $caseStatus
 * @property 'AWS'|'Self' $resolverType
 */
class UpdateResolverTypeResponse extends Response
{
}
