<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetIterableForms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ItemId
 * @property string|null $ItemName
 * @property list<string>|null $GlossaryTerms
 * @property array<string, AssetFormEntry>|null $Forms
 * @property array<string, AssetFormEntry>|null $Attachments
 */
class IterableFormItem extends Shape
{
    /**
     * @param array{
     *     ItemId?: string|null,
     *     ItemName?: string|null,
     *     GlossaryTerms?: list<string>|null,
     *     Forms?: array<string, AssetFormEntry>|null,
     *     Attachments?: array<string, AssetFormEntry>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
