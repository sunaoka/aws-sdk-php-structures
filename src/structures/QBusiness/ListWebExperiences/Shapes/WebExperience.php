<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListWebExperiences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $webExperienceId
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $defaultEndpoint
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|'PENDING_AUTH_CONFIG' $status
 */
class WebExperience extends Shape
{
    /**
     * @param array{
     *     webExperienceId?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     updatedAt?: \Aws\Api\DateTimeResult,
     *     defaultEndpoint?: string,
     *     status?: 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|'PENDING_AUTH_CONFIG'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
