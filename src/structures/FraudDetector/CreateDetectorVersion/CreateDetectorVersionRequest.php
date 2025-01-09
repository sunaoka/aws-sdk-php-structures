<?php

namespace Sunaoka\Aws\Structures\FraudDetector\CreateDetectorVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $detectorId
 * @property string $description
 * @property list<string> $externalModelEndpoints
 * @property list<Shapes\Rule> $rules
 * @property list<Shapes\ModelVersion> $modelVersions
 * @property 'ALL_MATCHED'|'FIRST_MATCHED' $ruleExecutionMode
 * @property list<Shapes\Tag> $tags
 */
class CreateDetectorVersionRequest extends Request
{
    /**
     * @param array{
     *     detectorId: string,
     *     description?: string,
     *     externalModelEndpoints?: list<string>,
     *     rules: list<Shapes\Rule>,
     *     modelVersions?: list<Shapes\ModelVersion>,
     *     ruleExecutionMode?: 'ALL_MATCHED'|'FIRST_MATCHED',
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
