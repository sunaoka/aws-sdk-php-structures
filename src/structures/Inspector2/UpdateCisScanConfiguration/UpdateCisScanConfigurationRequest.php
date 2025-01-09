<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateCisScanConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $scanConfigurationArn
 * @property string $scanName
 * @property Shapes\Schedule $schedule
 * @property 'LEVEL_1'|'LEVEL_2' $securityLevel
 * @property Shapes\UpdateCisTargets $targets
 */
class UpdateCisScanConfigurationRequest extends Request
{
    /**
     * @param array{
     *     scanConfigurationArn: string,
     *     scanName?: string,
     *     schedule?: Shapes\Schedule,
     *     securityLevel?: 'LEVEL_1'|'LEVEL_2',
     *     targets?: Shapes\UpdateCisTargets
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
