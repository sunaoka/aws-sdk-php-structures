<?php

namespace Sunaoka\Aws\Structures\ControlTower\EnableBaseline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $baselineVersion
 * @property list<Shapes\EnabledBaselineParameter>|null $parameters
 * @property string $baselineIdentifier
 * @property string $targetIdentifier
 * @property array<string, string>|null $tags
 */
class EnableBaselineRequest extends Request
{
    /**
     * @param array{
     *     baselineVersion: string,
     *     parameters?: list<Shapes\EnabledBaselineParameter>|null,
     *     baselineIdentifier: string,
     *     targetIdentifier: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
