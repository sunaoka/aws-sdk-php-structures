<?php

namespace Sunaoka\Aws\Structures\LakeFormation\CreateLakeFormationOptIn\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CatalogId
 * @property 'DATABASE'|'TABLE' $ResourceType
 * @property list<LFTag> $Expression
 * @property string $ExpressionName
 */
class LFTagPolicyResource extends Shape
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     ResourceType: 'DATABASE'|'TABLE',
     *     Expression?: list<LFTag>,
     *     ExpressionName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
