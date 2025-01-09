<?php

namespace Sunaoka\Aws\Structures\IoTFleetHub\ListApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $applicationId
 * @property string $applicationName
 * @property string $applicationDescription
 * @property string $applicationUrl
 * @property int $applicationCreationDate
 * @property int $applicationLastUpdateDate
 * @property 'CREATING'|'DELETING'|'ACTIVE'|'CREATE_FAILED'|'DELETE_FAILED' $applicationState
 */
class ApplicationSummary extends Shape
{
    /**
     * @param array{
     *     applicationId: string,
     *     applicationName: string,
     *     applicationDescription?: string,
     *     applicationUrl: string,
     *     applicationCreationDate?: int,
     *     applicationLastUpdateDate?: int,
     *     applicationState?: 'CREATING'|'DELETING'|'ACTIVE'|'CREATE_FAILED'|'DELETE_FAILED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
