<?php

namespace Sunaoka\Aws\Structures\Comprehend\CreateEntityRecognizer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RecognizerName
 * @property string $VersionName
 * @property string $DataAccessRoleArn
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\EntityRecognizerInputDataConfig $InputDataConfig
 * @property string $ClientRequestToken
 * @property 'en'|'es'|'fr'|'de'|'it'|'pt'|'ar'|'hi'|'ja'|'ko'|'zh'|'zh-TW' $LanguageCode
 * @property string $VolumeKmsKeyId
 * @property Shapes\VpcConfig $VpcConfig
 * @property string $ModelKmsKeyId
 * @property string $ModelPolicy
 */
class CreateEntityRecognizerRequest extends Request
{
    /**
     * @param array{
     *     RecognizerName: string,
     *     VersionName?: string,
     *     DataAccessRoleArn: string,
     *     Tags?: list<Shapes\Tag>,
     *     InputDataConfig: Shapes\EntityRecognizerInputDataConfig,
     *     ClientRequestToken?: string,
     *     LanguageCode: 'en'|'es'|'fr'|'de'|'it'|'pt'|'ar'|'hi'|'ja'|'ko'|'zh'|'zh-TW',
     *     VolumeKmsKeyId?: string,
     *     VpcConfig?: Shapes\VpcConfig,
     *     ModelKmsKeyId?: string,
     *     ModelPolicy?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
