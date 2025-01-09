<?php

namespace Sunaoka\Aws\Structures\Ssm\ListDocuments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Key
 * @property list<string> $Values
 */
class DocumentKeyValuesFilter extends Shape
{
    /**
     * @param array{
     *     Key?: string,
     *     Values?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
