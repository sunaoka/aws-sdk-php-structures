<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScanConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $scanConfigurationArn
 * @property string|null $ownerId
 * @property string|null $scanName
 * @property 'LEVEL_1'|'LEVEL_2'|null $securityLevel
 * @property Schedule|null $schedule
 * @property CisTargets|null $targets
 * @property array<string, string>|null $tags
 */
class CisScanConfiguration extends Shape
{
    /**
     * @param array{
     *     scanConfigurationArn: string,
     *     ownerId?: string|null,
     *     scanName?: string|null,
     *     securityLevel?: 'LEVEL_1'|'LEVEL_2'|null,
     *     schedule?: Schedule|null,
     *     targets?: CisTargets|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
