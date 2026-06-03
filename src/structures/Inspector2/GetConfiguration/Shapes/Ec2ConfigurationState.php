<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Ec2ScanModeState|null $scanModeState
 * @property VMScannerState|null $vmScannerState
 */
class Ec2ConfigurationState extends Shape
{
    /**
     * @param array{
     *     scanModeState?: Ec2ScanModeState|null,
     *     vmScannerState?: VMScannerState|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
