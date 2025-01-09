<?php

namespace Sunaoka\Aws\Structures\Comprehend\StartPiiEntitiesDetectionJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\InputDataConfig $InputDataConfig
 * @property Shapes\OutputDataConfig $OutputDataConfig
 * @property 'ONLY_REDACTION'|'ONLY_OFFSETS' $Mode
 * @property Shapes\RedactionConfig $RedactionConfig
 * @property string $DataAccessRoleArn
 * @property string $JobName
 * @property 'en'|'es'|'fr'|'de'|'it'|'pt'|'ar'|'hi'|'ja'|'ko'|'zh'|'zh-TW' $LanguageCode
 * @property string $ClientRequestToken
 * @property list<Shapes\Tag> $Tags
 */
class StartPiiEntitiesDetectionJobRequest extends Request
{
    /**
     * @param array{
     *     InputDataConfig: Shapes\InputDataConfig,
     *     OutputDataConfig: Shapes\OutputDataConfig,
     *     Mode: 'ONLY_REDACTION'|'ONLY_OFFSETS',
     *     RedactionConfig?: Shapes\RedactionConfig,
     *     DataAccessRoleArn: string,
     *     JobName?: string,
     *     LanguageCode: 'en'|'es'|'fr'|'de'|'it'|'pt'|'ar'|'hi'|'ja'|'ko'|'zh'|'zh-TW',
     *     ClientRequestToken?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
