<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetImagePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $imageScanningEnabled
 * @property EcrConfiguration|null $ecrConfiguration
 * @property list<'TEST_INSTANCE_CVE'|'ON_DEMAND_AMI_CVE'>|null $imageScanningTypes
 * @property ScanResultCondition|null $scanResultCondition
 */
class ImageScanningConfiguration extends Shape
{
    /**
     * @param array{
     *     imageScanningEnabled?: bool|null,
     *     ecrConfiguration?: EcrConfiguration|null,
     *     imageScanningTypes?: list<'TEST_INSTANCE_CVE'|'ON_DEMAND_AMI_CVE'>|null,
     *     scanResultCondition?: ScanResultCondition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
