<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AutomatedUpdateDate
 * @property bool $Cancellable
 * @property string $CurrentVersion
 * @property string $Description
 * @property string $NewVersion
 * @property bool $UpdateAvailable
 * @property string $UpdateStatus
 * @property bool $OptionalDeployment
 */
class AwsOpenSearchServiceDomainServiceSoftwareOptionsDetails extends Shape
{
    /**
     * @param array{
     *     AutomatedUpdateDate?: string,
     *     Cancellable?: bool,
     *     CurrentVersion?: string,
     *     Description?: string,
     *     NewVersion?: string,
     *     UpdateAvailable?: bool,
     *     UpdateStatus?: string,
     *     OptionalDeployment?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
