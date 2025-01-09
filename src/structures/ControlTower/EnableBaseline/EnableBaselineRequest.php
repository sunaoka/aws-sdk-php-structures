<?php

namespace Sunaoka\Aws\Structures\ControlTower\EnableBaseline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $baselineIdentifier
 * @property string $baselineVersion
 * @property list<Shapes\EnabledBaselineParameter> $parameters
 * @property array<string, string> $tags
 * @property string $targetIdentifier
 */
class EnableBaselineRequest extends Request
{
    /**
     * @param array{
     *     baselineIdentifier: string,
     *     baselineVersion: string,
     *     parameters?: list<Shapes\EnabledBaselineParameter>,
     *     tags?: array<string, string>,
     *     targetIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
