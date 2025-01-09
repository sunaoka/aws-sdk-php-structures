<?php

namespace Sunaoka\Aws\Structures\Glue\GetCrawler\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConnectionName
 * @property string $Path
 * @property list<string> $Exclusions
 * @property list<'COMMENTS'|'RAWTYPES'> $EnableAdditionalMetadata
 */
class JdbcTarget extends Shape
{
    /**
     * @param array{
     *     ConnectionName?: string,
     *     Path?: string,
     *     Exclusions?: list<string>,
     *     EnableAdditionalMetadata?: list<'COMMENTS'|'RAWTYPES'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
