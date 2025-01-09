<?php

namespace Sunaoka\Aws\Structures\DLM\CreateLifecyclePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExecutionRoleArn
 * @property string $Description
 * @property 'ENABLED'|'DISABLED' $State
 * @property Shapes\PolicyDetails $PolicyDetails
 * @property array<string, string> $Tags
 * @property 'VOLUME'|'INSTANCE' $DefaultPolicy
 * @property int $CreateInterval
 * @property int $RetainInterval
 * @property bool $CopyTags
 * @property bool $ExtendDeletion
 * @property list<Shapes\CrossRegionCopyTarget> $CrossRegionCopyTargets
 * @property Shapes\Exclusions $Exclusions
 */
class CreateLifecyclePolicyRequest extends Request
{
    /**
     * @param array{
     *     ExecutionRoleArn: string,
     *     Description: string,
     *     State: 'ENABLED'|'DISABLED',
     *     PolicyDetails?: Shapes\PolicyDetails,
     *     Tags?: array<string, string>,
     *     DefaultPolicy?: 'VOLUME'|'INSTANCE',
     *     CreateInterval?: int,
     *     RetainInterval?: int,
     *     CopyTags?: bool,
     *     ExtendDeletion?: bool,
     *     CrossRegionCopyTargets?: list<Shapes\CrossRegionCopyTarget>,
     *     Exclusions?: Shapes\Exclusions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
