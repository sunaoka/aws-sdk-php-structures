<?php

namespace Sunaoka\Aws\Structures\imagebuilder\CreateDistributionConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $region
 * @property AmiDistributionConfiguration $amiDistributionConfiguration
 * @property ContainerDistributionConfiguration $containerDistributionConfiguration
 * @property list<string> $licenseConfigurationArns
 * @property list<LaunchTemplateConfiguration> $launchTemplateConfigurations
 * @property S3ExportConfiguration $s3ExportConfiguration
 * @property list<FastLaunchConfiguration> $fastLaunchConfigurations
 */
class Distribution extends Shape
{
    /**
     * @param array{
     *     region: string,
     *     amiDistributionConfiguration?: AmiDistributionConfiguration,
     *     containerDistributionConfiguration?: ContainerDistributionConfiguration,
     *     licenseConfigurationArns?: list<string>,
     *     launchTemplateConfigurations?: list<LaunchTemplateConfiguration>,
     *     s3ExportConfiguration?: S3ExportConfiguration,
     *     fastLaunchConfigurations?: list<FastLaunchConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
