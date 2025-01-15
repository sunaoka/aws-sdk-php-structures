<?php

namespace Sunaoka\Aws\Structures\Comprehend\CreateEntityRecognizer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RecognizerName
 * @property string|null $VersionName
 * @property string $DataAccessRoleArn
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\EntityRecognizerInputDataConfig $InputDataConfig
 * @property string|null $ClientRequestToken
 * @property 'en'|'es'|'fr'|'de'|'it'|'pt'|'ar'|'hi'|'ja'|'ko'|'zh'|'zh-TW' $LanguageCode
 * @property string|null $VolumeKmsKeyId
 * @property Shapes\VpcConfig|null $VpcConfig
 * @property string|null $ModelKmsKeyId
 * @property string|null $ModelPolicy
 */
class CreateEntityRecognizerRequest extends Request
{
    /**
     * @param array{
     *     RecognizerName: string,
     *     VersionName?: string|null,
     *     DataAccessRoleArn: string,
     *     Tags?: list<Shapes\Tag>|null,
     *     InputDataConfig: Shapes\EntityRecognizerInputDataConfig,
     *     ClientRequestToken?: string|null,
     *     LanguageCode: 'en'|'es'|'fr'|'de'|'it'|'pt'|'ar'|'hi'|'ja'|'ko'|'zh'|'zh-TW',
     *     VolumeKmsKeyId?: string|null,
     *     VpcConfig?: Shapes\VpcConfig|null,
     *     ModelKmsKeyId?: string|null,
     *     ModelPolicy?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
