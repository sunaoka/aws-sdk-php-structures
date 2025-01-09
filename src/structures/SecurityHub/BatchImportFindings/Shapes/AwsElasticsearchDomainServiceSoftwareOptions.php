<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AutomatedUpdateDate
 * @property bool $Cancellable
 * @property string $CurrentVersion
 * @property string $Description
 * @property string $NewVersion
 * @property bool $UpdateAvailable
 * @property string $UpdateStatus
 */
class AwsElasticsearchDomainServiceSoftwareOptions extends Shape
{
    /**
     * @param array{
     *     AutomatedUpdateDate?: string,
     *     Cancellable?: bool,
     *     CurrentVersion?: string,
     *     Description?: string,
     *     NewVersion?: string,
     *     UpdateAvailable?: bool,
     *     UpdateStatus?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
