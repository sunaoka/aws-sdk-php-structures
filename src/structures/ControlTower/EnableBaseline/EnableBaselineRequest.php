<?php

namespace Sunaoka\Aws\Structures\ControlTower\EnableBaseline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $baselineIdentifier
 * @property string $baselineVersion
 * @property list<Shapes\EnabledBaselineParameter>|null $parameters
 * @property array<string, string>|null $tags
 * @property string $targetIdentifier
 */
class EnableBaselineRequest extends Request
{
    /**
     * @param array{
     *     baselineIdentifier: string,
     *     baselineVersion: string,
     *     parameters?: list<Shapes\EnabledBaselineParameter>|null,
     *     tags?: array<string, string>|null,
     *     targetIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
