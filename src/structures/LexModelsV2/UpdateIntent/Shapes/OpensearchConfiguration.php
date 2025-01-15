<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $domainEndpoint
 * @property string $indexName
 * @property bool|null $exactResponse
 * @property ExactResponseFields|null $exactResponseFields
 * @property list<string>|null $includeFields
 */
class OpensearchConfiguration extends Shape
{
    /**
     * @param array{
     *     domainEndpoint: string,
     *     indexName: string,
     *     exactResponse?: bool|null,
     *     exactResponseFields?: ExactResponseFields|null,
     *     includeFields?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
