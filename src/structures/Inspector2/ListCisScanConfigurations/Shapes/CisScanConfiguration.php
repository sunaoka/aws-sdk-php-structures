<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScanConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ownerId
 * @property string $scanConfigurationArn
 * @property string|null $scanName
 * @property Schedule|null $schedule
 * @property 'LEVEL_1'|'LEVEL_2'|null $securityLevel
 * @property array<string, string>|null $tags
 * @property CisTargets|null $targets
 */
class CisScanConfiguration extends Shape
{
    /**
     * @param array{
     *     ownerId?: string|null,
     *     scanConfigurationArn: string,
     *     scanName?: string|null,
     *     schedule?: Schedule|null,
     *     securityLevel?: 'LEVEL_1'|'LEVEL_2'|null,
     *     tags?: array<string, string>|null,
     *     targets?: CisTargets|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
