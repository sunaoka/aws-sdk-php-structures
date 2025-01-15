<?php

namespace Sunaoka\Aws\Structures\Translate\StartTextTranslationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $JobName
 * @property Shapes\InputDataConfig $InputDataConfig
 * @property Shapes\OutputDataConfig $OutputDataConfig
 * @property string $DataAccessRoleArn
 * @property string $SourceLanguageCode
 * @property list<string> $TargetLanguageCodes
 * @property list<string>|null $TerminologyNames
 * @property list<string>|null $ParallelDataNames
 * @property string $ClientToken
 * @property Shapes\TranslationSettings|null $Settings
 */
class StartTextTranslationJobRequest extends Request
{
    /**
     * @param array{
     *     JobName?: string|null,
     *     InputDataConfig: Shapes\InputDataConfig,
     *     OutputDataConfig: Shapes\OutputDataConfig,
     *     DataAccessRoleArn: string,
     *     SourceLanguageCode: string,
     *     TargetLanguageCodes: list<string>,
     *     TerminologyNames?: list<string>|null,
     *     ParallelDataNames?: list<string>|null,
     *     ClientToken: string,
     *     Settings?: Shapes\TranslationSettings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
