<?php

namespace Sunaoka\Aws\Structures\imagebuilder\CreateDistributionConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $region
 * @property AmiDistributionConfiguration|null $amiDistributionConfiguration
 * @property ContainerDistributionConfiguration|null $containerDistributionConfiguration
 * @property list<string>|null $licenseConfigurationArns
 * @property list<LaunchTemplateConfiguration>|null $launchTemplateConfigurations
 * @property S3ExportConfiguration|null $s3ExportConfiguration
 * @property list<FastLaunchConfiguration>|null $fastLaunchConfigurations
 */
class Distribution extends Shape
{
    /**
     * @param array{
     *     region: string,
     *     amiDistributionConfiguration?: AmiDistributionConfiguration|null,
     *     containerDistributionConfiguration?: ContainerDistributionConfiguration|null,
     *     licenseConfigurationArns?: list<string>|null,
     *     launchTemplateConfigurations?: list<LaunchTemplateConfiguration>|null,
     *     s3ExportConfiguration?: S3ExportConfiguration|null,
     *     fastLaunchConfigurations?: list<FastLaunchConfiguration>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
