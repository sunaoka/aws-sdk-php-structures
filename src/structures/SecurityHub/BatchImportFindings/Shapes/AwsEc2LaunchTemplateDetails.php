<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LaunchTemplateName
 * @property string|null $Id
 * @property AwsEc2LaunchTemplateDataDetails|null $LaunchTemplateData
 * @property int|null $DefaultVersionNumber
 * @property int|null $LatestVersionNumber
 */
class AwsEc2LaunchTemplateDetails extends Shape
{
    /**
     * @param array{
     *     LaunchTemplateName?: string|null,
     *     Id?: string|null,
     *     LaunchTemplateData?: AwsEc2LaunchTemplateDataDetails|null,
     *     DefaultVersionNumber?: int|null,
     *     LatestVersionNumber?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
