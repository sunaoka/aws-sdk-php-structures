<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScanConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ownerId
 * @property string $scanConfigurationArn
 * @property string $scanName
 * @property Schedule $schedule
 * @property 'LEVEL_1'|'LEVEL_2' $securityLevel
 * @property array<string, string> $tags
 * @property CisTargets $targets
 */
class CisScanConfiguration extends Shape
{
    /**
     * @param array{
     *     ownerId?: string,
     *     scanConfigurationArn: string,
     *     scanName?: string,
     *     schedule?: Schedule,
     *     securityLevel?: 'LEVEL_1'|'LEVEL_2',
     *     tags?: array<string, string>,
     *     targets?: CisTargets
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
