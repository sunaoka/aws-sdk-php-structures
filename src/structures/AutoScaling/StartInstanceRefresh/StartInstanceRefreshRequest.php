<?php

namespace Sunaoka\Aws\Structures\AutoScaling\StartInstanceRefresh;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingGroupName
 * @property 'Rolling'|'ReplaceRootVolume'|null $Strategy
 * @property Shapes\DesiredConfiguration|null $DesiredConfiguration
 * @property Shapes\RefreshPreferences|null $Preferences
 */
class StartInstanceRefreshRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingGroupName: string,
     *     Strategy?: 'Rolling'|'ReplaceRootVolume'|null,
     *     DesiredConfiguration?: Shapes\DesiredConfiguration|null,
     *     Preferences?: Shapes\RefreshPreferences|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
