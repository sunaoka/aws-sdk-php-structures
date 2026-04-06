<?php

namespace Sunaoka\Aws\Structures\Inspector2\CreateCisScanConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $scanName
 * @property 'LEVEL_1'|'LEVEL_2' $securityLevel
 * @property Shapes\Schedule $schedule
 * @property Shapes\CreateCisTargets $targets
 * @property array<string, string>|null $tags
 */
class CreateCisScanConfigurationRequest extends Request
{
    /**
     * @param array{
     *     scanName: string,
     *     securityLevel: 'LEVEL_1'|'LEVEL_2',
     *     schedule: Shapes\Schedule,
     *     targets: Shapes\CreateCisTargets,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
