<?php

namespace Sunaoka\Aws\Structures\Glue\GetCrawlers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ConnectionName
 * @property string|null $Path
 * @property list<string>|null $Exclusions
 * @property list<'COMMENTS'|'RAWTYPES'>|null $EnableAdditionalMetadata
 */
class JdbcTarget extends Shape
{
    /**
     * @param array{
     *     ConnectionName?: string|null,
     *     Path?: string|null,
     *     Exclusions?: list<string>|null,
     *     EnableAdditionalMetadata?: list<'COMMENTS'|'RAWTYPES'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
