<?php

namespace Sunaoka\Aws\Structures\ControlTower\UpdateEnabledBaseline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $baselineVersion
 * @property string $enabledBaselineIdentifier
 * @property list<Shapes\EnabledBaselineParameter> $parameters
 */
class UpdateEnabledBaselineRequest extends Request
{
    /**
     * @param array{
     *     baselineVersion: string,
     *     enabledBaselineIdentifier: string,
     *     parameters?: list<Shapes\EnabledBaselineParameter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
