<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateClusterSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $cluster
 * @property list<Shapes\ClusterSetting> $settings
 */
class UpdateClusterSettingsRequest extends Request
{
    /**
     * @param array{
     *     cluster: string,
     *     settings: list<Shapes\ClusterSetting>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
