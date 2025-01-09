<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\GetApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $applicationVersion
 * @property 'Deploying'|'Succeeded'|'Failed'|'Updating Deployment' $status
 * @property string $statusReason
 */
class DeployedVersionSummary extends Shape
{
    /**
     * @param array{
     *     applicationVersion: int<1, max>,
     *     status: 'Deploying'|'Succeeded'|'Failed'|'Updating Deployment',
     *     statusReason?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
