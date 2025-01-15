<?php

namespace Sunaoka\Aws\Structures\Inspector2\CreateCisScanConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $scanName
 * @property Shapes\Schedule $schedule
 * @property 'LEVEL_1'|'LEVEL_2' $securityLevel
 * @property array<string, string>|null $tags
 * @property Shapes\CreateCisTargets $targets
 */
class CreateCisScanConfigurationRequest extends Request
{
    /**
     * @param array{
     *     scanName: string,
     *     schedule: Shapes\Schedule,
     *     securityLevel: 'LEVEL_1'|'LEVEL_2',
     *     tags?: array<string, string>|null,
     *     targets: Shapes\CreateCisTargets
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
