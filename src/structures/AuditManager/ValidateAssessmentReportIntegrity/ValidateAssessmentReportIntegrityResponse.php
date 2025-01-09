<?php

namespace Sunaoka\Aws\Structures\AuditManager\ValidateAssessmentReportIntegrity;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool $signatureValid
 * @property string $signatureAlgorithm
 * @property string $signatureDateTime
 * @property string $signatureKeyId
 * @property list<string> $validationErrors
 */
class ValidateAssessmentReportIntegrityResponse extends Response
{
}
