<?php

namespace Sunaoka\Aws\Structures\ControlTower\UpdateEnabledBaseline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $baselineVersion
 * @property string $enabledBaselineIdentifier
 * @property list<Shapes\EnabledBaselineParameter>|null $parameters
 */
class UpdateEnabledBaselineRequest extends Request
{
    /**
     * @param array{
     *     baselineVersion: string,
     *     enabledBaselineIdentifier: string,
     *     parameters?: list<Shapes\EnabledBaselineParameter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
