<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AutomatedUpdateDate
 * @property bool|null $Cancellable
 * @property string|null $CurrentVersion
 * @property string|null $Description
 * @property string|null $NewVersion
 * @property bool|null $UpdateAvailable
 * @property string|null $UpdateStatus
 */
class AwsElasticsearchDomainServiceSoftwareOptions extends Shape
{
    /**
     * @param array{
     *     AutomatedUpdateDate?: string|null,
     *     Cancellable?: bool|null,
     *     CurrentVersion?: string|null,
     *     Description?: string|null,
     *     NewVersion?: string|null,
     *     UpdateAvailable?: bool|null,
     *     UpdateStatus?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
