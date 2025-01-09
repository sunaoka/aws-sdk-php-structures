<?php

namespace Sunaoka\Aws\Structures\Translate\StartTextTranslationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobName
 * @property Shapes\InputDataConfig $InputDataConfig
 * @property Shapes\OutputDataConfig $OutputDataConfig
 * @property string $DataAccessRoleArn
 * @property string $SourceLanguageCode
 * @property list<string> $TargetLanguageCodes
 * @property list<string> $TerminologyNames
 * @property list<string> $ParallelDataNames
 * @property string $ClientToken
 * @property Shapes\TranslationSettings $Settings
 */
class StartTextTranslationJobRequest extends Request
{
    /**
     * @param array{
     *     JobName?: string,
     *     InputDataConfig: Shapes\InputDataConfig,
     *     OutputDataConfig: Shapes\OutputDataConfig,
     *     DataAccessRoleArn: string,
     *     SourceLanguageCode: string,
     *     TargetLanguageCodes: list<string>,
     *     TerminologyNames?: list<string>,
     *     ParallelDataNames?: list<string>,
     *     ClientToken: string,
     *     Settings?: Shapes\TranslationSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
