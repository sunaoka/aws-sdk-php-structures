<?php

namespace Sunaoka\Aws\Structures\kendra\ListExperiences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Id
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|null $Status
 * @property list<ExperienceEndpoint>|null $Endpoints
 */
class ExperiencesSummary extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Id?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|null,
     *     Endpoints?: list<ExperienceEndpoint>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
