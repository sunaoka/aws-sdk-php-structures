<?php

namespace Sunaoka\Aws\Structures\Continuum\GetCodeIssueArtifact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $producedBy
 * @property list<PrevalidationSignal>|null $signals
 */
class PrevalidationSignalsBody extends Shape
{
    /**
     * @param array{
     *     producedBy?: string|null,
     *     signals?: list<PrevalidationSignal>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
