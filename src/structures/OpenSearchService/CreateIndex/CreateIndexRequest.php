<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\CreateIndex;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $IndexName
 * @property Shapes\IndexSchema $IndexSchema
 */
class CreateIndexRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     IndexName: string,
     *     IndexSchema: Shapes\IndexSchema
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
