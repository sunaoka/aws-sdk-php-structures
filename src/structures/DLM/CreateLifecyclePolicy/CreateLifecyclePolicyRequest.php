<?php

namespace Sunaoka\Aws\Structures\DLM\CreateLifecyclePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExecutionRoleArn
 * @property string $Description
 * @property 'ENABLED'|'DISABLED' $State
 * @property Shapes\PolicyDetails|null $PolicyDetails
 * @property array<string, string>|null $Tags
 * @property 'VOLUME'|'INSTANCE'|null $DefaultPolicy
 * @property int<1, max>|null $CreateInterval
 * @property int<1, max>|null $RetainInterval
 * @property bool|null $CopyTags
 * @property bool|null $ExtendDeletion
 * @property list<Shapes\CrossRegionCopyTarget>|null $CrossRegionCopyTargets
 * @property Shapes\Exclusions|null $Exclusions
 */
class CreateLifecyclePolicyRequest extends Request
{
    /**
     * @param array{
     *     ExecutionRoleArn: string,
     *     Description: string,
     *     State: 'ENABLED'|'DISABLED',
     *     PolicyDetails?: Shapes\PolicyDetails|null,
     *     Tags?: array<string, string>|null,
     *     DefaultPolicy?: 'VOLUME'|'INSTANCE'|null,
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
