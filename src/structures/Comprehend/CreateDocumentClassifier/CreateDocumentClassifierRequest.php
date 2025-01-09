<?php

namespace Sunaoka\Aws\Structures\Comprehend\CreateDocumentClassifier;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DocumentClassifierName
 * @property string $VersionName
 * @property string $DataAccessRoleArn
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\DocumentClassifierInputDataConfig $InputDataConfig
 * @property Shapes\DocumentClassifierOutputDataConfig $OutputDataConfig
 * @property string $ClientRequestToken
 * @property 'en'|'es'|'fr'|'de'|'it'|'pt'|'ar'|'hi'|'ja'|'ko'|'zh'|'zh-TW' $LanguageCode
 * @property string $VolumeKmsKeyId
 * @property Shapes\VpcConfig $VpcConfig
 * @property 'MULTI_CLASS'|'MULTI_LABEL' $Mode
 * @property string $ModelKmsKeyId
 * @property string $ModelPolicy
 */
class CreateDocumentClassifierRequest extends Request
{
    /**
     * @param array{
     *     DocumentClassifierName: string,
     *     VersionName?: string,
     *     DataAccessRoleArn: string,
     *     Tags?: list<Shapes\Tag>,
     *     InputDataConfig: Shapes\DocumentClassifierInputDataConfig,
     *     OutputDataConfig?: Shapes\DocumentClassifierOutputDataConfig,
     *     ClientRequestToken?: string,
     *     LanguageCode: 'en'|'es'|'fr'|'de'|'it'|'pt'|'ar'|'hi'|'ja'|'ko'|'zh'|'zh-TW',
     *     VolumeKmsKeyId?: string,
     *     VpcConfig?: Shapes\VpcConfig,
     *     Mode?: 'MULTI_CLASS'|'MULTI_LABEL',
     *     ModelKmsKeyId?: string,
     *     ModelPolicy?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
