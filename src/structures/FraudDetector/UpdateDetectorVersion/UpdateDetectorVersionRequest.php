<?php

namespace Sunaoka\Aws\Structures\FraudDetector\UpdateDetectorVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $detectorId
 * @property string $detectorVersionId
 * @property list<string> $externalModelEndpoints
 * @property list<Shapes\Rule> $rules
 * @property string $description
 * @property list<Shapes\ModelVersion> $modelVersions
 * @property 'ALL_MATCHED'|'FIRST_MATCHED' $ruleExecutionMode
 */
class UpdateDetectorVersionRequest extends Request
{
    /**
     * @param array{
     *     detectorId: string,
     *     detectorVersionId: string,
     *     externalModelEndpoints: list<string>,
     *     rules: list<Shapes\Rule>,
     *     description?: string,
     *     modelVersions?: list<Shapes\ModelVersion>,
     *     ruleExecutionMode?: 'ALL_MATCHED'|'FIRST_MATCHED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
