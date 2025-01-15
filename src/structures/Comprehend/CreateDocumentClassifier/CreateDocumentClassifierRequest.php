<?php

namespace Sunaoka\Aws\Structures\Comprehend\CreateDocumentClassifier;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DocumentClassifierName
 * @property string|null $VersionName
 * @property string $DataAccessRoleArn
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\DocumentClassifierInputDataConfig $InputDataConfig
 * @property Shapes\DocumentClassifierOutputDataConfig|null $OutputDataConfig
 * @property string|null $ClientRequestToken
 * @property 'en'|'es'|'fr'|'de'|'it'|'pt'|'ar'|'hi'|'ja'|'ko'|'zh'|'zh-TW' $LanguageCode
 * @property string|null $VolumeKmsKeyId
 * @property Shapes\VpcConfig|null $VpcConfig
 * @property 'MULTI_CLASS'|'MULTI_LABEL'|null $Mode
 * @property string|null $ModelKmsKeyId
 * @property string|null $ModelPolicy
 */
class CreateDocumentClassifierRequest extends Request
{
    /**
     * @param array{
     *     DocumentClassifierName: string,
     *     VersionName?: string|null,
     *     DataAccessRoleArn: string,
     *     Tags?: list<Shapes\Tag>|null,
     *     InputDataConfig: Shapes\DocumentClassifierInputDataConfig,
     *     OutputDataConfig?: Shapes\DocumentClassifierOutputDataConfig|null,
     *     ClientRequestToken?: string|null,
     *     LanguageCode: 'en'|'es'|'fr'|'de'|'it'|'pt'|'ar'|'hi'|'ja'|'ko'|'zh'|'zh-TW',
     *     VolumeKmsKeyId?: string|null,
     *     VpcConfig?: Shapes\VpcConfig|null,
     *     Mode?: 'MULTI_CLASS'|'MULTI_LABEL'|null,
     *     ModelKmsKeyId?: string|null,
     *     ModelPolicy?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
