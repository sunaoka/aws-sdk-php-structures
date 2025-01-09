<?php

namespace Sunaoka\Aws\Structures\DLM\UpdateLifecyclePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PolicyId
 * @property string $ExecutionRoleArn
 * @property 'ENABLED'|'DISABLED' $State
 * @property string $Description
 * @property Shapes\PolicyDetails $PolicyDetails
 * @property int<1, max> $CreateInterval
 * @property int<1, max> $RetainInterval
 * @property bool $CopyTags
 * @property bool $ExtendDeletion
 * @property list<Shapes\CrossRegionCopyTarget> $CrossRegionCopyTargets
 * @property Shapes\Exclusions $Exclusions
 */
class UpdateLifecyclePolicyRequest extends Request
{
    /**
     * @param array{
     *     PolicyId: string,
     *     ExecutionRoleArn?: string,
     *     State?: 'ENABLED'|'DISABLED',
     *     Description?: string,
     *     PolicyDetails?: Shapes\PolicyDetails,
     *     CreateInterval?: int<1, max>,
     *     RetainInterval?: int<1, max>,
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
