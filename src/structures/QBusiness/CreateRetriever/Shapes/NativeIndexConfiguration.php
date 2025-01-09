<?php

namespace Sunaoka\Aws\Structures\QBusiness\CreateRetriever\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $indexId
 * @property array<string, DocumentAttributeBoostingConfiguration> $boostingOverride
 */
class NativeIndexConfiguration extends Shape
{
    /**
     * @param array{
     *     indexId: string,
     *     boostingOverride?: array<string, DocumentAttributeBoostingConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
