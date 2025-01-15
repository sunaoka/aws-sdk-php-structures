<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListDocumentClassifiers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DocumentClassifierFilter|null $Filter
 * @property string|null $NextToken
 * @property int<1, 500>|null $MaxResults
 */
class ListDocumentClassifiersRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\DocumentClassifierFilter|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 500>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
