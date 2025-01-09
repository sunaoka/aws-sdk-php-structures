<?php

namespace Sunaoka\Aws\Structures\AutoScaling\StartInstanceRefresh;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingGroupName
 * @property 'Rolling' $Strategy
 * @property Shapes\DesiredConfiguration $DesiredConfiguration
 * @property Shapes\RefreshPreferences $Preferences
 */
class StartInstanceRefreshRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingGroupName: string,
     *     Strategy?: 'Rolling',
     *     DesiredConfiguration?: Shapes\DesiredConfiguration,
     *     Preferences?: Shapes\RefreshPreferences
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
