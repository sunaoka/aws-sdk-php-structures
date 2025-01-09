<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\StartElasticsearchServiceSoftwareUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CurrentVersion
 * @property string $NewVersion
 * @property bool $UpdateAvailable
 * @property bool $Cancellable
 * @property 'PENDING_UPDATE'|'IN_PROGRESS'|'COMPLETED'|'NOT_ELIGIBLE'|'ELIGIBLE' $UpdateStatus
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $AutomatedUpdateDate
 * @property bool $OptionalDeployment
 */
class ServiceSoftwareOptions extends Shape
{
    /**
     * @param array{
     *     CurrentVersion?: string,
     *     NewVersion?: string,
     *     UpdateAvailable?: bool,
     *     Cancellable?: bool,
     *     UpdateStatus?: 'PENDING_UPDATE'|'IN_PROGRESS'|'COMPLETED'|'NOT_ELIGIBLE'|'ELIGIBLE',
     *     Description?: string,
     *     AutomatedUpdateDate?: \Aws\Api\DateTimeResult,
     *     OptionalDeployment?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
