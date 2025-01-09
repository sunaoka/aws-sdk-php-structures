<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $domainEndpoint
 * @property string $indexName
 * @property bool $exactResponse
 * @property ExactResponseFields $exactResponseFields
 * @property list<string> $includeFields
 */
class OpensearchConfiguration extends Shape
{
    /**
     * @param array{
     *     domainEndpoint: string,
     *     indexName: string,
     *     exactResponse?: bool,
     *     exactResponseFields?: ExactResponseFields,
     *     includeFields?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
