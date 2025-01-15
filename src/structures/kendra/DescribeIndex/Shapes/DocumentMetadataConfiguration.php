<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeIndex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'STRING_VALUE'|'STRING_LIST_VALUE'|'LONG_VALUE'|'DATE_VALUE' $Type
 * @property Relevance|null $Relevance
 * @property Search|null $Search
 */
class DocumentMetadataConfiguration extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Type: 'STRING_VALUE'|'STRING_LIST_VALUE'|'LONG_VALUE'|'DATE_VALUE',
     *     Relevance?: Relevance|null,
     *     Search?: Search|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
