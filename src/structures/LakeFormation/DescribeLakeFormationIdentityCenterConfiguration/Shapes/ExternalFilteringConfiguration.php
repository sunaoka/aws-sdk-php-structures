<?php

namespace Sunaoka\Aws\Structures\LakeFormation\DescribeLakeFormationIdentityCenterConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $Status
 * @property list<string> $AuthorizedTargets
 */
class ExternalFilteringConfiguration extends Shape
{
    /**
     * @param array{
     *     Status: 'ENABLED'|'DISABLED',
     *     AuthorizedTargets: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
