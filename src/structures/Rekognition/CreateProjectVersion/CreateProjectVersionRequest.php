<?php

namespace Sunaoka\Aws\Structures\Rekognition\CreateProjectVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProjectArn
 * @property string $VersionName
 * @property Shapes\OutputConfig $OutputConfig
 * @property Shapes\TrainingData|null $TrainingData
 * @property Shapes\TestingData|null $TestingData
 * @property array<string, string>|null $Tags
 * @property string|null $KmsKeyId
 * @property string|null $VersionDescription
 * @property Shapes\CustomizationFeatureConfig|null $FeatureConfig
 */
class CreateProjectVersionRequest extends Request
{
    /**
     * @param array{
     *     ProjectArn: string,
     *     VersionName: string,
     *     OutputConfig: Shapes\OutputConfig,
     *     TrainingData?: Shapes\TrainingData|null,
     *     TestingData?: Shapes\TestingData|null,
     *     Tags?: array<string, string>|null,
     *     KmsKeyId?: string|null,
     *     VersionDescription?: string|null,
     *     FeatureConfig?: Shapes\CustomizationFeatureConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
