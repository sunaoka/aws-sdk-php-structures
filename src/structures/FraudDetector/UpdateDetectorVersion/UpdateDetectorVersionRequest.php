<?php

namespace Sunaoka\Aws\Structures\FraudDetector\UpdateDetectorVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $detectorId
 * @property string $detectorVersionId
 * @property list<string> $externalModelEndpoints
 * @property list<Shapes\Rule> $rules
 * @property string|null $description
 * @property list<Shapes\ModelVersion>|null $modelVersions
 * @property 'ALL_MATCHED'|'FIRST_MATCHED'|null $ruleExecutionMode
 */
class UpdateDetectorVersionRequest extends Request
{
    /**
     * @param array{
     *     detectorId: string,
     *     detectorVersionId: string,
     *     externalModelEndpoints: list<string>,
     *     rules: list<Shapes\Rule>,
     *     description?: string|null,
     *     modelVersions?: list<Shapes\ModelVersion>|null,
     *     ruleExecutionMode?: 'ALL_MATCHED'|'FIRST_MATCHED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
