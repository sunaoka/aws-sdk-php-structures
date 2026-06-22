<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\GetMicrovmImageBuild;

use Sunaoka\Aws\Structures\Response;

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
 * @property Shapes\SnapshotBuild|null $snapshotBuild
 */
class GetMicrovmImageBuildResponse extends Response
{
}
