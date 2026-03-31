<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $applicationId
 * @property string $applicationName
 * @property string $domain
 * @property string|null $defaultKmsKeyId
 */
class ApplicationSummary extends Shape
{
    /**
     * @param array{
     *     applicationId: string,
     *     applicationName: string,
     *     domain: string,
     *     defaultKmsKeyId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
