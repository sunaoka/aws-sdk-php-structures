<?php

namespace Sunaoka\Aws\Structures\MigrationHubConfig\CreateHomeRegionControl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HomeRegion
 * @property Shapes\Target $Target
 * @property bool $DryRun
 */
class CreateHomeRegionControlRequest extends Request
{
    /**
     * @param array{
     *     HomeRegion: string,
     *     Target: Shapes\Target,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
