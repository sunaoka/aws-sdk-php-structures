<?php

namespace Sunaoka\Aws\Structures\Rekognition\CreateProjectVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProjectArn
 * @property string $VersionName
 * @property Shapes\OutputConfig $OutputConfig
 * @property Shapes\TrainingData $TrainingData
 * @property Shapes\TestingData $TestingData
 * @property array<string, string> $Tags
 * @property string $KmsKeyId
 * @property string $VersionDescription
 * @property Shapes\CustomizationFeatureConfig $FeatureConfig
 */
class CreateProjectVersionRequest extends Request
{
    /**
     * @param array{
     *     ProjectArn: string,
     *     VersionName: string,
     *     OutputConfig: Shapes\OutputConfig,
     *     TrainingData?: Shapes\TrainingData,
     *     TestingData?: Shapes\TestingData,
     *     Tags?: array<string, string>,
     *     KmsKeyId?: string,
     *     VersionDescription?: string,
     *     FeatureConfig?: Shapes\CustomizationFeatureConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
