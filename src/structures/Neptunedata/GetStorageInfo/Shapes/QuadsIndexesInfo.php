<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetStorageInfo\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property QuadsInfo|null $RDF
 * @property QuadsInfo|null $PG
 */
class QuadsIndexesInfo extends Shape
{
    /**
     * @param array{
     *     RDF?: QuadsInfo|null,
     *     PG?: QuadsInfo|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
