<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListWebExperiences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $webExperienceId
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $defaultEndpoint
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|'PENDING_AUTH_CONFIG'|null $status
 */
class WebExperience extends Shape
{
    /**
     * @param array{
     *     webExperienceId?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     defaultEndpoint?: string|null,
     *     status?: 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|'PENDING_AUTH_CONFIG'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
