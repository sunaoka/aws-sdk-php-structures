<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetRetriever\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $indexId
 * @property int|null $version
 * @property array<string, DocumentAttributeBoostingConfiguration>|null $boostingOverride
 */
class NativeIndexConfiguration extends Shape
{
    /**
     * @param array{
     *     indexId: string,
     *     version?: int|null,
     *     boostingOverride?: array<string, DocumentAttributeBoostingConfiguration>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
