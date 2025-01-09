<?php

namespace Sunaoka\Aws\Structures\kendra\ListExperiences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Id
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED' $Status
 * @property list<ExperienceEndpoint> $Endpoints
 */
class ExperiencesSummary extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Id?: string,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     Status?: 'CREATING'|'ACTIVE'|'DELETING'|'FAILED',
     *     Endpoints?: list<ExperienceEndpoint>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
