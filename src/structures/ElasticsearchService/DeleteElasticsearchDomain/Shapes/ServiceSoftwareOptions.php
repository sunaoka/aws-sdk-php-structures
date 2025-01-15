<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DeleteElasticsearchDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CurrentVersion
 * @property string|null $NewVersion
 * @property bool|null $UpdateAvailable
 * @property bool|null $Cancellable
 * @property 'PENDING_UPDATE'|'IN_PROGRESS'|'COMPLETED'|'NOT_ELIGIBLE'|'ELIGIBLE'|null $UpdateStatus
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $AutomatedUpdateDate
 * @property bool|null $OptionalDeployment
 */
class ServiceSoftwareOptions extends Shape
{
    /**
     * @param array{
     *     CurrentVersion?: string|null,
     *     NewVersion?: string|null,
     *     UpdateAvailable?: bool|null,
     *     Cancellable?: bool|null,
     *     UpdateStatus?: 'PENDING_UPDATE'|'IN_PROGRESS'|'COMPLETED'|'NOT_ELIGIBLE'|'ELIGIBLE'|null,
     *     Description?: string|null,
     *     AutomatedUpdateDate?: \Aws\Api\DateTimeResult|null,
     *     OptionalDeployment?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
