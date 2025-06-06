<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetFaceLivenessSessionResults;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $SessionId
 * @property 'CREATED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'EXPIRED' $Status
 * @property float|null $Confidence
 * @property Shapes\AuditImage|null $ReferenceImage
 * @property list<Shapes\AuditImage>|null $AuditImages
 * @property Shapes\Challenge|null $Challenge
 */
class GetFaceLivenessSessionResultsResponse extends Response
{
}
