<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LaunchTemplateName
 * @property string $Id
 * @property AwsEc2LaunchTemplateDataDetails $LaunchTemplateData
 * @property int $DefaultVersionNumber
 * @property int $LatestVersionNumber
 */
class AwsEc2LaunchTemplateDetails extends Shape
{
    /**
     * @param array{
     *     LaunchTemplateName?: string,
     *     Id?: string,
     *     LaunchTemplateData?: AwsEc2LaunchTemplateDataDetails,
     *     DefaultVersionNumber?: int,
     *     LatestVersionNumber?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
