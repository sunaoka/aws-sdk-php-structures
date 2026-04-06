<?php

namespace Sunaoka\Aws\Structures\ControlTower\UpdateEnabledBaseline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $baselineVersion
 * @property list<Shapes\EnabledBaselineParameter>|null $parameters
 * @property string $enabledBaselineIdentifier
 */
class UpdateEnabledBaselineRequest extends Request
{
    /**
     * @param array{
     *     baselineVersion: string,
     *     parameters?: list<Shapes\EnabledBaselineParameter>|null,
     *     enabledBaselineIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
