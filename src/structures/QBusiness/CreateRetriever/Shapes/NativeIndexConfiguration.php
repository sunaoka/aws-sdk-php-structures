<?php

namespace Sunaoka\Aws\Structures\QBusiness\CreateRetriever\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $indexId
 * @property array<string, DocumentAttributeBoostingConfiguration>|null $boostingOverride
 */
class NativeIndexConfiguration extends Shape
{
    /**
     * @param array{
     *     indexId: string,
     *     boostingOverride?: array<string, DocumentAttributeBoostingConfiguration>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
