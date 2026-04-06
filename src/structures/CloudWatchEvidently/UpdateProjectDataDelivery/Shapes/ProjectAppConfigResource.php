<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\UpdateProjectDataDelivery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $applicationId
 * @property string $configurationProfileId
 * @property string $environmentId
 */
class ProjectAppConfigResource extends Shape
{
    /**
     * @param array{
     *     applicationId: string,
     *     configurationProfileId: string,
     *     environmentId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
