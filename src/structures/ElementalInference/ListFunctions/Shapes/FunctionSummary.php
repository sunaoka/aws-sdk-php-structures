<?php

namespace Sunaoka\Aws\Structures\ElementalInference\ListFunctions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $id
 * @property string $name
 * @property string|null $description
 * @property 'CREATING'|'AVAILABLE'|'REFERENCED'|'DELETING'|'DELETED' $status
 * @property FunctionTarget|null $target
 * @property list<'FRAMES'|'SUBTITLES'|'CONTEXTUAL_METADATA'|'CLIP_METADATA'>|null $contextTypes
 */
class FunctionSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     id: string,
     *     name: string,
     *     description?: string|null,
     *     status: 'CREATING'|'AVAILABLE'|'REFERENCED'|'DELETING'|'DELETED',
     *     target?: FunctionTarget|null,
     *     contextTypes?: list<'FRAMES'|'SUBTITLES'|'CONTEXTUAL_METADATA'|'CLIP_METADATA'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
