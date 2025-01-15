<?php

namespace Sunaoka\Aws\Structures\IoTFleetHub\ListApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $applicationId
 * @property string $applicationName
 * @property string|null $applicationDescription
 * @property string $applicationUrl
 * @property int|null $applicationCreationDate
 * @property int|null $applicationLastUpdateDate
 * @property 'CREATING'|'DELETING'|'ACTIVE'|'CREATE_FAILED'|'DELETE_FAILED'|null $applicationState
 */
class ApplicationSummary extends Shape
{
    /**
     * @param array{
     *     applicationId: string,
     *     applicationName: string,
     *     applicationDescription?: string|null,
     *     applicationUrl: string,
     *     applicationCreationDate?: int|null,
     *     applicationLastUpdateDate?: int|null,
     *     applicationState?: 'CREATING'|'DELETING'|'ACTIVE'|'CREATE_FAILED'|'DELETE_FAILED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
