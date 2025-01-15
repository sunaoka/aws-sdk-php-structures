<?php

namespace Sunaoka\Aws\Structures\Comprehend\StartPiiEntitiesDetectionJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\InputDataConfig $InputDataConfig
 * @property Shapes\OutputDataConfig $OutputDataConfig
 * @property 'ONLY_REDACTION'|'ONLY_OFFSETS' $Mode
 * @property Shapes\RedactionConfig|null $RedactionConfig
 * @property string $DataAccessRoleArn
 * @property string|null $JobName
 * @property 'en'|'es'|'fr'|'de'|'it'|'pt'|'ar'|'hi'|'ja'|'ko'|'zh'|'zh-TW' $LanguageCode
 * @property string|null $ClientRequestToken
 * @property list<Shapes\Tag>|null $Tags
 */
class StartPiiEntitiesDetectionJobRequest extends Request
{
    /**
     * @param array{
     *     InputDataConfig: Shapes\InputDataConfig,
     *     OutputDataConfig: Shapes\OutputDataConfig,
     *     Mode: 'ONLY_REDACTION'|'ONLY_OFFSETS',
     *     RedactionConfig?: Shapes\RedactionConfig|null,
     *     DataAccessRoleArn: string,
     *     JobName?: string|null,
     *     LanguageCode: 'en'|'es'|'fr'|'de'|'it'|'pt'|'ar'|'hi'|'ja'|'ko'|'zh'|'zh-TW',
     *     ClientRequestToken?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
