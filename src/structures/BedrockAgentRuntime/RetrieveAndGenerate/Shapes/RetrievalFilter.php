<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RetrievalFilter> $andAll
 * @property FilterAttribute $equals
 * @property FilterAttribute $greaterThan
 * @property FilterAttribute $greaterThanOrEquals
 * @property FilterAttribute $in
 * @property FilterAttribute $lessThan
 * @property FilterAttribute $lessThanOrEquals
 * @property FilterAttribute $listContains
 * @property FilterAttribute $notEquals
 * @property FilterAttribute $notIn
 * @property list<RetrievalFilter> $orAll
 * @property FilterAttribute $startsWith
 * @property FilterAttribute $stringContains
 */
class RetrievalFilter extends Shape
{
    /**
     * @param array{
     *     andAll?: list<RetrievalFilter>,
     *     equals?: FilterAttribute,
     *     greaterThan?: FilterAttribute,
     *     greaterThanOrEquals?: FilterAttribute,
     *     in?: FilterAttribute,
     *     lessThan?: FilterAttribute,
     *     lessThanOrEquals?: FilterAttribute,
     *     listContains?: FilterAttribute,
     *     notEquals?: FilterAttribute,
     *     notIn?: FilterAttribute,
     *     orAll?: list<RetrievalFilter>,
     *     startsWith?: FilterAttribute,
     *     stringContains?: FilterAttribute
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
