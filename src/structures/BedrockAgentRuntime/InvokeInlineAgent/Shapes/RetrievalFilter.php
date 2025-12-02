<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RetrievalFilter>|null $andAll
 * @property FilterAttribute|null $equals
 * @property FilterAttribute|null $greaterThan
 * @property FilterAttribute|null $greaterThanOrEquals
 * @property FilterAttribute|null $in
 * @property FilterAttribute|null $lessThan
 * @property FilterAttribute|null $lessThanOrEquals
 * @property FilterAttribute|null $listContains
 * @property FilterAttribute|null $notEquals
 * @property FilterAttribute|null $notIn
 * @property list<RetrievalFilter>|null $orAll
 * @property FilterAttribute|null $startsWith
 * @property FilterAttribute|null $stringContains
 */
class RetrievalFilter extends Shape
{
    /**
     * @param array{
     *     andAll?: list<RetrievalFilter>|null,
     *     equals?: FilterAttribute|null,
     *     greaterThan?: FilterAttribute|null,
     *     greaterThanOrEquals?: FilterAttribute|null,
     *     in?: FilterAttribute|null,
     *     lessThan?: FilterAttribute|null,
     *     lessThanOrEquals?: FilterAttribute|null,
     *     listContains?: FilterAttribute|null,
     *     notEquals?: FilterAttribute|null,
     *     notIn?: FilterAttribute|null,
     *     orAll?: list<RetrievalFilter>|null,
     *     startsWith?: FilterAttribute|null,
     *     stringContains?: FilterAttribute|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
