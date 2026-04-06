<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetResourceLFTags\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CatalogId
 * @property 'DATABASE'|'TABLE' $ResourceType
 * @property list<LFTag> $Expression
 */
class LFTagPolicyResource extends Shape
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     ResourceType: 'DATABASE'|'TABLE',
     *     Expression: list<LFTag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
