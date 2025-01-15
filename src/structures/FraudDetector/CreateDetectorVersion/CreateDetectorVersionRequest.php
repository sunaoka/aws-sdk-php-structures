<?php

namespace Sunaoka\Aws\Structures\FraudDetector\CreateDetectorVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $detectorId
 * @property string|null $description
 * @property list<string>|null $externalModelEndpoints
 * @property list<Shapes\Rule> $rules
 * @property list<Shapes\ModelVersion>|null $modelVersions
 * @property 'ALL_MATCHED'|'FIRST_MATCHED'|null $ruleExecutionMode
 * @property list<Shapes\Tag>|null $tags
 */
class CreateDetectorVersionRequest extends Request
{
    /**
     * @param array{
     *     detectorId: string,
     *     description?: string|null,
     *     externalModelEndpoints?: list<string>|null,
     *     rules: list<Shapes\Rule>,
     *     modelVersions?: list<Shapes\ModelVersion>|null,
     *     ruleExecutionMode?: 'ALL_MATCHED'|'FIRST_MATCHED'|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
