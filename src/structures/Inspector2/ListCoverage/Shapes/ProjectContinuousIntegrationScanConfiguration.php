<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PULL_REQUEST'|'PUSH'|null $supportedEvent
 * @property list<'SAST'|'IAC'|'SCA'>|null $ruleSetCategories
 */
class ProjectContinuousIntegrationScanConfiguration extends Shape
{
    /**
     * @param array{
     *     supportedEvent?: 'PULL_REQUEST'|'PUSH'|null,
     *     ruleSetCategories?: list<'SAST'|'IAC'|'SCA'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
