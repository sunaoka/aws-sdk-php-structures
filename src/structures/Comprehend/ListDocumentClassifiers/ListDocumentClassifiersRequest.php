<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListDocumentClassifiers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DocumentClassifierFilter $Filter
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListDocumentClassifiersRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\DocumentClassifierFilter,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
