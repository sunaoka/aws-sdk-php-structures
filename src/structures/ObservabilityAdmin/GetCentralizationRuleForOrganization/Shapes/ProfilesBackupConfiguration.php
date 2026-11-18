<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\GetCentralizationRuleForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Region
 */
class ProfilesBackupConfiguration extends Shape
{
    /**
     * @param array{Region: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
