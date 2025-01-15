<?php

namespace Sunaoka\Aws\Structures\DLM\UpdateLifecyclePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PolicyId
 * @property string|null $ExecutionRoleArn
 * @property 'ENABLED'|'DISABLED'|null $State
 * @property string|null $Description
 * @property Shapes\PolicyDetails|null $PolicyDetails
 * @property int<1, max>|null $CreateInterval
 * @property int<1, max>|null $RetainInterval
 * @property bool|null $CopyTags
 * @property bool|null $ExtendDeletion
 * @property list<Shapes\CrossRegionCopyTarget>|null $CrossRegionCopyTargets
 * @property Shapes\Exclusions|null $Exclusions
 */
class UpdateLifecyclePolicyRequest extends Request
{
    /**
     * @param array{
     *     PolicyId: string,
     *     ExecutionRoleArn?: string|null,
     *     State?: 'ENABLED'|'DISABLED'|null,
     *     Description?: string|null,
     *     PolicyDetails?: Shapes\PolicyDetails|null,
     *     CreateInterval?: int<1, max>|null,
     *     RetainInterval?: int<1, max>|null,
     *     CopyTags?: bool|null,
     *     ExtendDeletion?: bool|null,
     *     CrossRegionCopyTargets?: list<Shapes\CrossRegionCopyTarget>|null,
     *     Exclusions?: Shapes\Exclusions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
