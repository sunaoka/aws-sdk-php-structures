<?php

namespace Sunaoka\Aws\Structures\AuditManager\ValidateAssessmentReportIntegrity;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool|null $signatureValid
 * @property string|null $signatureAlgorithm
 * @property string|null $signatureDateTime
 * @property string|null $signatureKeyId
 * @property list<string>|null $validationErrors
 */
class ValidateAssessmentReportIntegrityResponse extends Response
{
}
