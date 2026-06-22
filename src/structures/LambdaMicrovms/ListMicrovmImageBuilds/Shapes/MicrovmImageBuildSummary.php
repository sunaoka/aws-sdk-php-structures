<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\ListMicrovmImageBuilds\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $imageArn
 * @property string $imageVersion
 * @property string $buildId
 * @property 'PENDING'|'IN_PROGRESS'|'SUCCESSFUL'|'FAILED' $buildState
 * @property 'ARM_64' $architecture
 * @property 'GRAVITON' $chipset
 * @property string $chipsetGeneration
 * @property string|null $stateReason
 * @property \Aws\Api\DateTimeResult $createdAt
 */
class MicrovmImageBuildSummary extends Shape
{
    /**
     * @param array{
     *     imageArn: string,
     *     imageVersion: string,
     *     buildId: string,
     *     buildState: 'PENDING'|'IN_PROGRESS'|'SUCCESSFUL'|'FAILED',
     *     architecture: 'ARM_64',
     *     chipset: 'GRAVITON',
     *     chipsetGeneration: string,
     *     stateReason?: string|null,
     *     createdAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
