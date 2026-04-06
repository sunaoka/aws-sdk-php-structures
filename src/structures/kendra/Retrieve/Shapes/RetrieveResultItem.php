<?php

namespace Sunaoka\Aws\Structures\kendra\Retrieve\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $DocumentId
 * @property string|null $DocumentTitle
 * @property string|null $Content
 * @property string|null $DocumentURI
 * @property list<DocumentAttribute>|null $DocumentAttributes
 */
class RetrieveResultItem extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     DocumentId?: string|null,
     *     DocumentTitle?: string|null,
     *     Content?: string|null,
     *     DocumentURI?: string|null,
     *     DocumentAttributes?: list<DocumentAttribute>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
