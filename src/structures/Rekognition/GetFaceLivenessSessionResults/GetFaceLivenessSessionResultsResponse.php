<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetFaceLivenessSessionResults;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $SessionId
 * @property 'CREATED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'EXPIRED' $Status
 * @property float $Confidence
 * @property Shapes\AuditImage $ReferenceImage
 * @property list<Shapes\AuditImage> $AuditImages
 */
class GetFaceLivenessSessionResultsResponse extends Response
{
}
