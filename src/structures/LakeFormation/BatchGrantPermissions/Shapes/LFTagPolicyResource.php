<?php

namespace Sunaoka\Aws\Structures\LakeFormation\BatchGrantPermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CatalogId
 * @property 'DATABASE'|'TABLE' $ResourceType
 * @property list<LFTag>|null $Expression
 * @property string|null $ExpressionName
 */
class LFTagPolicyResource extends Shape
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     ResourceType: 'DATABASE'|'TABLE',
     *     Expression?: list<LFTag>|null,
     *     ExpressionName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
