<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\GetApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $applicationVersion
 * @property 'Deploying'|'Succeeded'|'Failed'|'Updating Deployment' $status
 * @property string $statusReason
 */
class DeployedVersionSummary extends Shape
{
    /**
     * @param array{
     *     applicationVersion: int,
     *     status: 'Deploying'|'Succeeded'|'Failed'|'Updating Deployment',
     *     statusReason?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
